<?php
$conn = new mysqli("localhost", "root", "", "survey_db");

$sql = "SELECT language, COUNT(*) AS count FROM survey GROUP BY language";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[$row["language"]] = $row["count"];
}
echo json_encode($data);
?>
