<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Contact Me</h1>
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
        <h2>Get In Touch</h2>
        <form method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea><br>

            <button type="submit">Send</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Your message was sent!</p>
        <?php endif; ?>
    </section>
</body>
</html>