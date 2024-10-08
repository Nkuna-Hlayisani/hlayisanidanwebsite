<?php
include 'db_config.php';

// Handle form submission to add a new project
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $project_title = $_POST['project_title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO projects (project_title, description) 
            VALUES ('$project_title', '$description')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New project added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve all projects
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>My Projects</h1>
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
        <h2>Project</h2>
        <ul>
         <li><strong>Project Name:</strong>Website project</li>
         <li><strong>Description:</strong>Create a dynamic website for your curriculum vitae(CV)</li>
       </ul>

        <h2>My Projects</h2>
        <ul>
            <?php while($row = $result->fetch_assoc()): ?>
            <li>
                <strong><?php echo $row['project_title']; ?></strong><br>
                <?php echo $row['description']; ?>
            </li>
            <?php endwhile; ?>
        </ul>
    </section>
</body>
</html>