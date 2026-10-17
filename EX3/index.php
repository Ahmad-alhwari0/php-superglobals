<?php

$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["num1"];
    $number2 = $_POST["num2"];
    $op = $_POST["op"];

    if ($op == "+") {
        $result = $number1 + $number2;
    } else if ($op == "-") {
        $result = $number1 - $number2;
    } else if ($op == "*") {
        $result = $number1 * $number2;
    } else {
        if ($number2 == 0) {
            $result = "number 2 is 0 ";
        } else {
            $result = $number1 / $number2;
        }
    }
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="number" name="num1" step="any" placeholder="Number 1" required>
        <input type="number" name="num2" step="any" placeholder="Number 2" required>

        <div>
            <button type="submit" name="op" value="+">+</button>
            <button type="submit" name="op" value="-">-</button>
            <button type="submit" name="op" value="*">×</button>
            <button type="submit" name="op" value="/">÷</button>
        </div>
        <p>Result: <?php echo $result; ?></p>
    </form>
</body>

</html>