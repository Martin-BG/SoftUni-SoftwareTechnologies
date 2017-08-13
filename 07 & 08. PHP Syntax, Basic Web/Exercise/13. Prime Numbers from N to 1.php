<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php

function is_prime($num)
{
    if ($num <= 1) {
        return false;
    } else if ($num <= 3) {
        return true;
    } else if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }

    $i = 5;
    while ($i * $i <= $num) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }

    return true;
}

if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    for ($i = $num; $i > 1; $i--) {
        if (is_prime($i)) {
            echo $i . " ";
        }
    }
}
?>
</body>
</html>