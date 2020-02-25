<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset='UTF-8'>
    <title>Sample08a</title>
    <style>
    td {
        text-align: center;
    }
    </style>
</head>

<body>
    <form action="" method="post">
        <?php

$w = " width=50 ";
$cw1 = $cw2 = $cw3 = "";
if (isset($_POST["w"])) {
    switch ($_POST["w"]) {
        case 1:$w = " width=30 ";
            $cw1 = " checked ";
            break;
        case 2:$w = " width=50 ";
            $cw2 = " checked ";
            break;
        case 3:$w = " width=80 ";
            $cw3 = " checked ";
            break;
        default:$w = " width=50 ";
            break;
    }
}
$h = " height=50 ";
$ch1 = $ch2 = $ch3 = "";
if (isset($_POST["h"])) {
    switch ($_POST["h"]) {
        case 1:
            $h = " height=30 ";
            $ch1 = " checked ";
            break;
        case 2:
            $h = " height=50 ";
            $ch2 = " checked ";
            break;
        case 3:
            $h = " height=80 ";
            $ch3 = " checked ";
            break;
        default:
            $h = " height=50 ";
            break;
    }
}
$ir = "";
$ci1 = $ci2 = $ci3 = "";
if (isset($_POST["i"])) {
    switch ($_POST["i"]) {
        case 1:
            $ir = "a";
            $ci1 = "checked";
            break;
        case 2:
            $ir = "b";
            $ci2 = "checked";
            break;
        case 3:
            $ir = "c";
            $ci3 = "checked";
            break;
    }
}

echo "<table border='1'";
echo "<caption>掛け算表</caption>";
echo "<tr>";
echo "<th " . $w . $h . ">    </th>";
for ($j = 1; $j <= 9; $j++) {
    echo "<th " . $w . $h . ">" . $j . "</th>";
}
echo "</tr>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>" . "<th " . $w . $h . ">" . $i . "</th>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td " . $w . $h . ">" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<p>";
echo "幅：";

echo "<input type='radio' name='w'  value='1'" . $cw1 . ">せまい    ";
echo "<input type='radio' name='w'  value='2'" . $cw2 . ">ふつう    ";
echo "<input type='radio' name='w'  value='3'" . $cw3 . ">ひろい    ";
echo "</p>";

echo "<p>";
echo "高さ：";
echo "<input type='radio' name='h'  value='1'" . $ch1 . ">ひくい    ";
echo "<input type='radio' name='h'  value='2'" . $ch2 . ">ふつう    ";
echo "<input type='radio' name='h'  value='3'" . $ch3 . ">たかい    ";
echo "</p>";



?>
        <input type="submit" name="send" value="send">
    </form>
</body>

</html>