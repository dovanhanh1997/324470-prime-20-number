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

function printNUmber($n)
{
    for ($i = 0; $i <= $n; $i++) {
        if (isPrime($i)) {
            echo $i.' ';
        }
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Print 20 prime Number</title>

</head>
<body>
<form method="post">
    <label>Enter your Prime number amout you want.</label>
    <input type="number" name="primeNumber">
    <button type="submit">Display</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST['primeNumber'];
    printNUmber($number);
}
?>
</body>
</html>