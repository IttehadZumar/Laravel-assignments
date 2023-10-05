<!DOCTYPE html>
<html>

<head>
    <title>Weather Report</title>
</head>

<body>
    <h2>Weather Report</h2>
    <form method="post">
        <label for="temperature">Enter the temperature (in Celsius):</label>
        <input type="number" name="temperature" id="temperature" required>
        <input type="submit" value="Check Weather">
    </form>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user-entered temperature from the form
        $temperature = $_POST["temperature"];

        // Determine the weather message based on temperature range
        if ($temperature <= 0) {
            $message = "It's freezing!";
        } elseif ($temperature <= 20) {
            $message = "It's cool.";
        } else {
            $message = "It's warm.";
        }

        // Display the weather message
        echo "<p>$message</p>";
    }
    ?>

</body>

</html>