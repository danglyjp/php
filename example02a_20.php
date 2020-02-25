<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Change Character Color (Example02a)</title>
</head>
<body>
<form action="" method="post">
<?php
if (!isset($_POST["change"])) {
    $col = "h1";
} else {
    $col = $_POST["change"];
}
echo "<$col>";
echo "Hello,JIIT!";
echo "</$col>";

echo "<input type='submit' value='h1' name='change'>";
echo "<input type='submit' value='h2' name='change'>";
echo "<input type='submit' value='h3' name='change'>";
echo "<input type='submit' value='h4' name='change'>";
echo "<input type='submit' value='h5' name='change'>";
echo "<input type='submit' value='h6' name='change'>";
?>
</form>
</body>
</html>