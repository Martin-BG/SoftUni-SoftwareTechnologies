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
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    $prevPrev = 0;
    $prev = 0;
    $next = 1;

    for ($i = 0; $i < $num; $i++) {
        echo $next . " ";
        $curr = $prevPrev + $prev + $next;
        $prevPrev = $prev;
        $prev = $next;
        $next = $curr;
    }
}
?>
</body>
</html>