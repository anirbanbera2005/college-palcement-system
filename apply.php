<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $job = $_POST["job"];
    
    $application = "$name,$email,$job\n";
    file_put_contents("applications.txt", $application, FILE_APPEND);
    
    echo "<script>alert('Application submitted successfully!'); window.location.href='index.html';</script>";
}

$jobs = [
    "Software Developer",
    "Data Analyst",
    "Web Designer"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Jobs</title>
    <style>
        /* Copy the CSS from index.html and register.php */
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Apply for Jobs</h1>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="jobs.php">Job Listings</a></li>
                <li><a href="apply.php">Apply for Jobs</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container">
            <form action="apply.php" method="post">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <select name="job" required>
                    <option value="">Select a job</option>
                    <?php foreach ($jobs as $job): ?>
                    <option value="<?php echo $job; ?>"><?php echo $job; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Apply">
            </form>
        </div>
    </main>
</body>
</html>