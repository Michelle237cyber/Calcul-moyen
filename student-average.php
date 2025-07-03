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

        <p>
            <strong>Note:</strong> Grades must be between 0 and 20. The average will be calculated and an appreciation will be given based on the average.
        </p>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis maxime natus vitae modi soluta iusto rerum fugit dolorum, libero itaque odit. Dolorem deserunt reiciendis, quo odit aliquam at. Amet, optio.</P>
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











