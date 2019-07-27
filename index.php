<?php

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function printNumber($n)
{
    for ($i = 0; $i < $n; $i++) {
        if (isPrime($i)) {
            echo $i . ' ';
        }
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Print Prime Number</title>

</head>
<body>
<form method="post">

    <label>Enter amount number you want</label>
    <input type="text" name="number">
    <button type="submit">Display</button>

    <?php
    if ($_SERVER['REQUEST_METHOD'] = 'POST') {
        $number = $_POST['number'];

        printNumber($number);
    }
    ?>
</form>

</body>
</html>
