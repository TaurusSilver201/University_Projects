<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Committees</title>
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
        .logo {
            display: block;
            margin: 0 auto;
            max-width: 150px; /* Adjust the max-width as needed */
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

        h1, h2 {
            margin-top: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 8px;
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
    </style>
</head>
<body>
    <header>
    <img class="logo" src="ndub.png" alt="NDUB Logo">
        <h1>Committees</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="committees.php">Committees</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="add_delete_entries.php">Add/Delete Entries</a></li>
        </ul>
    </nav>
    <main>
        <h2>Committees</h2>
        <ul>
            <?php
            // Include the database connection file
            include_once 'includes/db.inc.php';

            // Fetch committees from the database
            $sql = "SELECT * FROM Committee";
            $result = mysqli_query($conn, $sql);

            // Display committees
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>{$row['committee_name']}</li>";
                }
            } else {
                echo "<li>No committees found.</li>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 Club Management System</p>
    </footer>
</body>
</html>

