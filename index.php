<?php
$conn = new mysqli("localhost", "root", "", "survey_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $language = $_POST["language"];
    $stmt = $conn->prepare("INSERT INTO survey (language) VALUES (?)");
    $stmt->bind_param("s", $language);
    $stmt->execute();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Survey App</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>What's your favorite programming language?</h2>
    <form method="POST">
        <label><input type="radio" name="language" value="Python" required> Python</label>
        <label><input type="radio" name="language" value="JavaScript"> JavaScript</label>
        <label><input type="radio" name="language" value="Java"> Java</label>
        <label><input type="radio" name="language" value="C++"> C++</label>
        <input type="submit" value="Vote">
    </form>

    <h3>Survey Results</h3>
    <canvas id="resultsChart" width="400" height="200"></canvas>

    <script>
    const ctx = document.getElementById('resultsChart').getContext('2d');
    let chart;

    async function fetchData() {
        const res = await fetch('get_data.php');
        const data = await res.json();

        const labels = Object.keys(data);
        const values = Object.values(data);

        if (chart) chart.destroy();

        chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# of Votes',
                    data: values,
                    backgroundColor: ['#3498db', '#2ecc71', '#f1c40f', '#e74c3c']
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    }

    fetchData();
    setInterval(fetchData, 2000);
    </script>
</body>
</html>
