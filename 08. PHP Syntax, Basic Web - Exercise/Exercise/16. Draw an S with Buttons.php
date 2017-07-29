<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
function rowOnes()
{
    for ($i = 0; $i < 5; $i++) {
        echo "<button style='background-color:blue'>1</button>";
    }
    echo "<br>";
}

function rowFirstOne()
{
    echo "<button style='background-color:blue'>1</button>";
    for ($i = 1; $i < 5; $i++) {
        echo "<button>0</button>";
    }
    echo "<br>";
}

function rowLastOne()
{
    for ($i = 1; $i < 5; $i++) {
        echo "<button>0</button>";
    }
    echo "<button style='background-color:blue'>1</button><br>";
}

rowOnes();
for ($i = 0; $i < 3; $i++) {
    rowFirstOne();
}
rowOnes();
for ($i = 0; $i < 3; $i++) {
    rowLastOne();
}
rowOnes();
?>
</body>
</html>