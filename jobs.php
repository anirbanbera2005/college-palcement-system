<?php
$jobs = [
    ["title" => "Software Developer", "company" => "Tech Corp", "location" => "New York"],
    ["title" => "Data Analyst", "company" => "Data Inc", "location" => "San Francisco"],
    ["title" => "Web Designer", "company" => "Creative Solutions", "location" => "London"],
    ["title" => "java developer", "company" => "Elevance", "location" => "kolkata"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <style>
        /* Copy the CSS from index.html and add this: */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Job Listings</h1>
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
            <table>
                <tr>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Location</th>
                </tr>
                <?php foreach ($jobs as $job): ?>
                <tr>
                    <td><?php echo $job["title"]; ?></td>
                    <td><?php echo $job["company"]; ?></td>
                    <td><?php echo $job["location"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
</body>
</html>