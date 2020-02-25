<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample06a</title>
</head>
<body>
<form action="" method="post">
<?php
$rb[0] = "";
$rb[1] = "";
$rb[2] = "";
$rb[3] = "";
$rb[4] = "";
$rb[5] = "";

$v = "<p>ダン　ヴァン　リー</p>";

if (isset($_POST["send"])) {
    if (isset($_POST["size"])) {
        $i = $_POST["size"];
        $rb[$i - 1] = "checked";

        $v = "<h" . $i . ">ダン　ヴァン　リー</h" . $i . ">";
    } else {
        echo "h-tag is not specified <br>";
    }
}

echo $v;
echo "<p>090-1234-5678</p>";
print "<p>松戸市北小金５９</p>";

for ($i = 1; $i <= 6; $i++) {
    echo "<input type='radio' name='size' value='" . $i . "' "
        . $rb[$i - 1] . ">h" . $i . "タグ     ";
}

?>
<p>
<input type="submit" name="send" value="send">
</p>
</form>
</body>
</html>