<?php
include 'db_config.php';

// Handle form submission to add a new work experience entry
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $job_title = $_POST['job_title'];
    $company = $_POST['company'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "INSERT INTO work_experience (job_title, company, start_date, end_date) 
            VALUES ('$job_title', '$company', '$start_date', '$end_date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New work experience added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve all work experience entries
$sql = "SELECT * FROM work_experience";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Work Experience</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>My Work Experience</h1>
        <nav>
            <a href="index.php">Home</a> | 
            <a href="education.php">Education</a> | 
            <a href="work_experience.php">Work Experience</a> |
            <a href="skills.php">Skills</a> |
            <a href="projects.php">Projects</a> |
            <a href="contact.php">Contact</a> 
        </nav>
    </header>

    <section>
        <h2>Work Experience</h2>
        <ul>
            <li><strong>Experience:</strong> I do not have work experience because i am still a student</li>
    </section>
</body>
</html>