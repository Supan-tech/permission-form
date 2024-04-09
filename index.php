<!DOCTYPE html>
<html>
<head>
    <title>Permission Form</title>
</head>
<body>
    <h2>Permission Form</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $full_name = $_POST["full_name"];
        $sex = $_POST["sex"];
        $days = $_POST["days"];
        $year = $_POST["year"];
        $reason = $_POST["reason"];


        echo "<h3>Submission Result</h3>";
        echo "<p><strong>Name:</strong> $full_name</p>";
        echo "<p><strong>Sex:</strong> $sex</p>";
        echo "<p><strong>Number of Days:</strong> $days</p>";
        echo "<p><strong>Year:</strong> Year $year</p>";
        echo "<p><strong>Reason:</strong> $reason</p>";
    } else {

    ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="full_name">Full Name:</label><br>
            <input type="text" id="full_name" name="full_name" required><br><br>

            <label>Sex:</label><br>
            <input type="radio" id="male" name="sex" value="male" checked>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="sex" value="female">
            <label for="female">Female</label><br><br>

            <label for="days">Number of Days:</label><br>
            <input type="number" id="days" name="days" min="1" required><br><br>

            <label for="year">Year:</label><br>
            <select id="year" name="year" required>
                <option value="">Select Year</option>
                <option value="1">Year 1</option>
                <option value="2">Year 2</option>
                <option value="3">Year 3</option>
                <option value="4">Year 4</option>
            </select><br><br>

            <label for="reason">Reason:</label><br>
            <textarea id="reason" name="reason" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    <?php
    }
    ?>
</body>
</html>
