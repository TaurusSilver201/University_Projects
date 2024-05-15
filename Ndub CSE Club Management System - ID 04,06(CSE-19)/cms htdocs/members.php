<?php
// Include the database connection file
include_once 'includes/db.inc.php';

// Initialize an empty array to store member data
$members = array();

// Query to fetch members from the database
$sql = "SELECT * FROM Member";
$result = mysqli_query($conn, $sql);

// Check if query was successful
if ($result) {
    // Fetch each row from the result set and add it to the $members array
    while ($row = mysqli_fetch_assoc($result)) {
        $members[] = $row;
    }
}

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDUB Computer Club - Members</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Additional styles for enhanced appearance */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #007bff;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 20px;
        }

        h1 {
            margin-top: 0;
        }

        footer {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .logo {
            display: block;
            margin: 0 auto;
            max-width: 150px; /* Adjust the max-width as needed */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <img class="logo" src="ndub.png" alt="NDUB Logo">
        <h1>Welcome to NDUB Computer Club</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="committees.php">Committees</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="add_delete_entries.php">Manage Club</a></li>
        </ul>
    </nav>
    <main>
        <h1>Members</h1>
        <table>
            <thead>
                <tr>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Student ID</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($members as $member): ?>
                <tr>
                    <td><?php echo $member['member_id']; ?></td>
                    <td><?php echo $member['name']; ?></td>
                    <td><?php echo $member['email']; ?></td>
                    <td><?php echo $member['student_id']; ?></td>
                    <td><?php echo $member['year']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2024 NDUB Computer Club</p>
    </footer>
</body>
</html>
