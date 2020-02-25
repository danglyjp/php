<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Change Character Color (Example02)</title>
</head>
<body>
<form action="" method="get">
<?php
if (!isset($_POST["change"])) {
    $col = "black";
} else {
    $col = $_POST["change"];
}
echo "<h1 style=color:".$col.">";
echo "Hello,JIIT!";
echo "</font></h1>";

echo "<input type='submit' value='red' name='change'>";
echo "<input type='submit' value='blue' name='change'>";
echo "<input type='submit' value='green' name='change'>";
echo "<input type='submit' value='yellow' name='change'>";
echo "<input type='submit' value='magenta' name='change'>";
?>
</form>
</body>
</html>