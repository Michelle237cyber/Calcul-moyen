<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Form</title>
    <!-- <style>
        body {
            font-family: Arial;
            margin: 50px;
        }
        input, label {
            margin: 10px 0;
            display: block;
        }
    </style> -->
</head>
<body>
    <h2>Student Grade Form</h2>
    <form method="post" action="">
        <label>Student Name:</label>
        <input type="text" name="name" required>

        <label>French Grade:</label>
        <input type="number" name="french" step="0.01" min="0" max="20" required>

        <label>Math Grade:</label>
        <input type="number" name="math" step="0.01" min="0" max="20" required>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $french = floatval($_POST['french']);
        $math = floatval($_POST['math']);

        $average = ($french + $math) / 2;

        // Appreciation logic
        if ($average >= 16) {
            $appreciation = "EXCELLENT";
        } elseif ($average >= 12) {
            $appreciation = "GOOD";
        } elseif ($average >= 10) {
            $appreciation = "AVERAGE";
        } else {
            $appreciation = "INSUFFICIENT";
        }

        echo "<h3>Results for $name</h3>";
        echo "Average: " . number_format($average, 2) . "<br>";
        echo "Appreciation: <strong>$appreciation</strong>";
    }
    ?>
</body>
</html>











