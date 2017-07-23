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
    $num = ($num % 2 == 1) ? $num : $num - 1;
    for ($i = $num; $i >= 1; $i -= 2) {
        echo $i . " ";
    }
}
?>
</body>
</html>