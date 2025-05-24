# Data-Visualization-Using-php-And-mysql
#Survey Web App
This is a simple yet professional one-page survey application where users can vote for their favorite programming language. All votes are stored in a MySQL database and visualized live using Chart.js—all on the same page.

#Built With
PHP
MySQL
JavaScript (Chart.js)
HTML5 & CSS3
XAMPP (Local Server Environment)

#Folder Structure

survey_app/
├── index.php         # Main UI & form handler
├── get_data.php      # AJAX endpoint to fetch chart data
├── style.css         # Modern responsive CSS
└── README.md         # You're here!
# Setup Instructions
1.  Install XAMPP
If not already installed, download XAMPP from:
 https://www.apachefriends.org/

2.  Create Database
Open phpMyAdmin (http://localhost/phpmyadmin)

Create a new database called:

survey_db
Run this SQL to create the table:

CREATE TABLE survey (
    id INT AUTO_INCREMENT PRIMARY KEY,
    language VARCHAR(255) NOT NULL
);
3.  Set Up Project
Copy the entire survey_app/ folder into your XAMPP htdocs/ directory:

C:/xampp/htdocs/survey_app/
4.  Start Server
Open XAMPP Control Panel

Start Apache and MySQL

Visit:
 http://localhost/survey_app/

 Features
Users can vote for one of several programming languages.

All votes are stored in a MySQL table.

Live chart updates show real-time results using AJAX and Chart.js.

Mobile-responsive and visually polished with CSS.

 License
This project is open source for learning and educational purposes.
