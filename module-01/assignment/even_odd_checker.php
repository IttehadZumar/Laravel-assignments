<!DOCTYPE html>
<html>

<head>
    <title>Even-Odd Checker</title>
</head>

<body>
    <h2>Even-Odd Checker</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Check">
    </form>

    <div>
        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the user-entered number from the form
            $number = $_POST["number"];

            // Check if the number is even or odd
            if ($number % 2 == 0) {
                echo "<p>$number is an even number.</p>";
            } else {
                echo "<p>$number is an odd number.</p>";
            }
        }
        ?>
    </div>

</body>

</html>

