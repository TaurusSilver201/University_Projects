<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add/Delete Entries</title>
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

        section {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
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
        <h1>Add/Delete Entries</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="committees.php">Committees</a></li>
            <li><a href="events.php">Events</a></li>
        </ul>
    </nav>
    <main>
        <section id="add-members">
            <h2>Add Member</h2>
            <form action="add_member.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="student_id">Student ID:</label>
                <input type="text" id="student_id" name="student_id">
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" min="1900" max="2099" required>
                <button type="submit">Add Member</button>
            </form>
        </section>
        <section id="delete-members">
            <h2>Delete Member</h2>
            <form action="delete_member.php" method="post">
                <label for="member_id">Member ID:</label>
                <input type="number" id="member_id" name="member_id" required>
                <button type="submit">Delete Member</button>
            </form>
        </section>
        <section id="add-events">
            <h2>Add Event</h2>
            <form action="add_event.php" method="post">
                <label for="event_name">Event Name:</label>
                <input type="text" id="event_name" name="event_name" required>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                <button type="submit">Add Event</button>
            </form>
        </section>
        <section id="delete-events">
            <h2>Delete Event</h2>
            <form action="delete_event.php" method="post">
                <label for="event_name">Event Name:</label>
                <input type="text" id="event_name" name="event_name" required>
                <button type="submit">Delete Event</button>
            </form>
        </section>
        <section id="add-committees">
            <h2>Add Committee</h2>
            <form action="add_committee.php" method="post">
                <label for="committee_name">Committee Name:</label>
                <input type="text" id="committee_name" name="committee_name" required>
                <button type="submit">Add Committee</button>
            </form>
        </section>
        <section id="delete-committees">
            <h2>Delete Committee</h2>
            <form action="delete_committee.php" method="post">
                <label for="committee_name">Committee Name:</label>
                <input type="text" id="committee_name" name="committee_name" required>
                <button type="submit">Delete Committee</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Club Management System</p>
    </footer>
</body>
</html>
