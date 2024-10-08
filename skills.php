<?php
include 'db_config.php';

// Handle form submission to add a new skill
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $skill_name = $_POST['skill_name'];
    $proficiency = $_POST['proficiency'];

    $sql = "INSERT INTO skills (skill_name, proficiency) 
            VALUES ('$skill_name', '$proficiency')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New skill added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve all skills
$sql = "SELECT * FROM skills";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skills</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>My Skills</h1>
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
    <h2>Add New Skill</h2>
    <ul>
         <li>HTML, CSS</li>
         <li>C++</li>
        </ul>

    </section>
</body>
</html>