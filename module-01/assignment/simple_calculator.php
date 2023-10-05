<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" id="num1" required>
        <br>

        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" id="num2" required>
        <br>

        <label for="operation">Select an operation:</label>
        <select name="operation" id="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user-entered numbers and selected operation from the form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        // Perform the selected operation and display the result
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "<p>Result: $num1 + $num2 = $result</p>";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "<p>Result: $num1 - $num2 = $result</p>";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "<p>Result: $num1 * $num2 = $result</p>";
                break;
            case "divide":
                if ($num2 == 0) {
                    echo "<p>Error: Division by zero is not allowed.</p>";
                } else {
                    $result = $num1 / $num2;
                    echo "<p>Result: $num1 / $num2 = $result</p>";
                }
                break;
            default:
                echo "<p>Invalid operation selected.</p>";
        }
    }
    ?>

</body>

</html>