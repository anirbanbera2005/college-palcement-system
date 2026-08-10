<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
    $student = "$name,$email,$password\n";
    file_put_contents("students.txt", $student, FILE_APPEND);
    
    echo "<script>alert('Registration successful!'); window.location.href='index.html';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        /* Copy the CSS from index.html and add this: */
        form {
            background: #ffffff;
            padding: 20px;
            margin-top: 20px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        input[type="submit"] {
            background: #3498db;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Student Registration</h1>
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
            <form action="register.php" method="post">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Register">
            </form>
        </div>
    </main>
</body>
</html>