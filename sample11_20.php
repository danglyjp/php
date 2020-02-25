<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample11</title>
</head>
<body>
<form action="" method="post">
<?php
$subject = array("  ", "C言語", "Java", "HTML", "PHP", "SQL", "Average");
$name = array("Jonh", "Smith", "Mike", "Joe");


if (isset($_POST["send"])) {
    for ($i = 0; $i < count($name); $i++) {
        for ($j = 0; $j < count($subject)-2; $j++) {
            $id = "p_" . $i . "_" . $j;
            $point[$i][$j] = $_POST[$id];
        }
    }

} else {
    $point = array(
        array(80, 85, 100, 90, 70),
        array(60, 75, 70, 65, 60),
        array(75, 70, 70, 60, 60),
        array(85, 85, 90, 95, 65)
    );
}

echo "<table border='1' >";
echo "<tr>";
for ($i = 0; $i < count($subject); $i++) {
    echo "<th>" . $subject[$i] . "</th>";
}
echo "</tr>";
for ($i = 0; $i < count($name); $i++) {
    $sum = 0;
    echo "<tr><th>" . $name[$i] . "</th>";


    for ($j = 0; $j < count($subject) - 2; $j++) {
        echo "<td>" . "<input type='text' name='p_" . $i . "_" . $j . "' value='" . $point[$i][$j] . "' size='8'></td>";
        $sum += $point[$i][$j];
    }
    echo "<td>" . $sum / (count($subject) - 2) . "</td></tr>";

}
echo "</table>";

?>
<p><input type="submit" name="send" value="calculation"></p>
</form>
</body>
</html>
