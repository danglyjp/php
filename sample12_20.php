<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12</title>
</head>
<body>
<form action="" method="post">
<?php
if (isset($_POST["send"])) {
    $str = $_POST["s"];
} else {
    $str = "";
}
echo "文字列：<input type='text' name='s' value='" . $str . "' size='50'>";
echo "<ul>";
if (isset($_POST["ck1"])) {
    echo "<li><input type='checkbox' checked name='ck1' >文字列の長さ⇒" . strlen($str) . "</li>";
} else {
    echo "<li><input type='checkbox' name='ck1' >文字列の長さ</li>";
}

if (isset($_POST["ck2"])) {
    echo "<li><input type='checkbox' checked name='ck2' >大文字列⇒" . strtoupper($str) . "</li>";
} else {
    echo "<li><input type='checkbox' name='ck2' >大文字列</li>";
}

if (isset($_POST["ck3"])) {
    echo "<li><input type='checkbox' checked name='ck3' >小文字列=>" . strtolower($str) . "</li>";
} else {
    echo "<li><input type='checkbox' name='ck3' >小文字列</li>";
}

if (isset($_POST["ck4"])) {
    echo "<li><input type='checkbox' checked name='ck4' >部分文字列("
    . "<input type='text' name='ss' size='3' value='" . $_POST["ss"] . "' >文字から"
    . "<input type='text' name='sn' size='3' value='" . $_POST["sn"] . "' >文字分⇒"
    . substr($str, $_POST["ss"] - 1, $_POST["sn"]) . "</li>";

} else {
    echo "<li><input type='checkbox' checked name='ck4' >部分文字列("
        . "<input type='text' name='ss' size='3' value='' >文字から"
        . "<input type='text' name='sn' size='3' value='' >文字分</li>";
 
}

if (isset($_POST["ck5"])) {
    echo "<li><input type='checkbox' checked name='ck5' >部分文字列検索(検索："
        . "<input type='text' name='sq' size='3' value='".$_POST['sq']."' >)⇒ "
        . (strpos($str, $_POST['sq'])+ 1 )." 文字目から</li>";

} else {
    echo "<li><input type='checkbox' checked name='ck5' >部分文字列検索(検索："
        . "<input type='text' name='sq' size='3' value='' > ) </li>";
}

?>
<p><input type="submit" value="send" name="send"></p>
</form>
</body>
</html>