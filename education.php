<?php
include 'db_config.php';

// Handle form submission to add a new education entry
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $degree = $_POST['degree'];
    $institution = $_POST['institution'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "INSERT INTO education (degree, institution, start_date, end_date) 
            VALUES ('$degree', '$institution', '$start_date', '$end_date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New education added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve all education entries
$sql = "SELECT * FROM education";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Education</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>My Education</h1>
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
        <h2>Current Education</h2>
        <ul>
            <li><strong>Degree:</strong>BSc.Mathemetical Science</li>
            <li><strong>Institution:</strong>University of Limpopo</li>
            <li><strong>Year:</strong>first year</li>
        <h2>My Education History</h2>
        <ul>
            <li><strong>Education history:</strong> Matric </li>
        </ul>
    </section>
</body>
</html>