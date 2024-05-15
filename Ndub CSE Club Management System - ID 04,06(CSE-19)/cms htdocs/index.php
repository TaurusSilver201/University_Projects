<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDUB Computer Club</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Additional styles for enhanced appearance */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg'); /* Path to your background image */
            background-size: cover; /* Ensure the background image covers the entire viewport */
            color: #333;
        }

        /* Your existing styles go here */
        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: relative; /* Ensure relative positioning for the z-index to work */
            z-index: 1; /* Set a higher z-index to keep the header above other elements */
        }

        nav {
            position: absolute; /* Position the navigation section */
            top: 0; /* Align the navigation section to the top of the viewport */
            left: 0; /* Align the navigation section to the left of the viewport */
            width: 100%; /* Make the navigation section full-width */
            z-index: 1; /* Set a higher z-index to keep the navigation above other elements */
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
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px; /* Adjust the height of the shadow */
            bottom: -5px; /* Position the shadow below the text */
            left: 0;
            background: rgba(255, 255, 255, 0.5); /* Adjust the color and opacity of the shadow */
            transition: height 0.3s; /* Add transition effect */
        }

        nav ul li a:hover::before {
            height: 5px; /* Increase the height of the shadow on hover */
        }

        nav ul li a:hover {
            color: #ffcc00; /* Change the color of the navigation links on hover */
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            position: relative; /* Ensure relative positioning for the z-index to work */
            z-index: 0; /* Set a lower z-index to keep the main content below other elements */
        }

        section {
            margin-bottom: 20px;
            color: #000; /* Change the color of section text to white */
            background-color: rgba(200, 200, 200, 0.8); /* Soft grey background with opacity */
            padding: 20px; /* Add padding for better readability */
            border-radius: 8px; /* Add rounded corners for better appearance */
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
            max-width: 200px;
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
        <section>
            <h2>About NDUB Computer Club</h2>
            <p>The NDUB Computer Club is a community of technology enthusiasts and professionals dedicated to exploring and advancing various aspects of computer science and information technology.</p>
            <p>Our club offers opportunities for students to learn, collaborate, and innovate through workshops, seminars, competitions, and projects.</p>
        </section>
        <section>
            <h2>Upcoming Events</h2>
            <ul>
                <?php
                // Include the database connection file
                include_once 'includes/db.inc.php';

                // Fetch events from the database
                $sql = "SELECT * FROM Events";
                $result = mysqli_query($conn, $sql);

                // Display events
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li>{$row['Event_name']}: {$row['date']}</li>";
                    }
                } else {
                    echo "<li>No upcoming events.</li>";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 NDUB Computer Club</p>
    </footer>
        <p>&copy; 2024 NDUB Computer Club</p>
    </footer>
</body>
</html>
