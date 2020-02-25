<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample04</title>
</head>
<body>
<form action="" method="post">
<?php
if (isset($_POST["send"])) {
    $p = $_POST["p"];
    $q = $_POST["q"];
    $r = $_POST["r"];
} else {
    $p = "";
    $q = "";
    $r = "";
}
echo "p = <input type='text' size='3' name='p' value='" . $p . "'> <br>";
if (($p != "") && ($p >= 60)) {
    echo "<p>" . $p . "点は合格</p>";
} else {
    echo "<p></p>";
}

echo "q = <input type='text' size='3' name='q' value='" . $q . "'> <br>";
if (($q != "") && ($q >= 60)) {
    echo "<p>" . $q . "点は合格</p>";
} else if (($q != "") && ($q >= 0)) {
    echo "<p>" . $q . "点は合格</p>";
} else {
    echo "<p></p>";
}

echo "r = <input type='text' size='3' name='r' value='" . $r . "'> <br>";
if (($r != "") && ($r >= 80)) {
    echo "<p>" . $p . "点はA</p>";
} else if (($r != "") && ($r >= 70)) {
    echo "<p>" . $r . "点はB</p>";
} else if (($r != "") && ($r >= 60)) {
    echo "<p>" . $r . "点はC</p>";
} else if (($r != "") && ($r >= 0)) {
    echo "<p>" . $r . "点はD</p>";
} else {
    echo "<p></p>";
}
?>
<input type="submit" name="send" value="send">

</form>
</body>
</html>