<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample05</title>
</head>
<body>
<form action="" method="post">
<?php
$msg = array("A判定", "B判定", "C判定", "D判定");
$judge = array("A", "B", "C", "D");
if (isset($_POST["send"])) {
    $grade = $_POST["point"];
} else {
    $grade = "";
}
echo "<select name='point'>";
echo '<option value="">判定結果を選んでください</option>';
for ($i = 0; $i < count($msg); $i++) {
    if ($grade == $judge[$i]) {
        echo "<option value='" . $judge[$i] . "'selected>" . $msg[$i] . "</option>";
    } else {
        echo "<option value='" . $judge[$i] . "'>" . $msg[$i] . "</option>";
    }
}
echo "</select>";
if (isset($_POST["send"]) && $grade != "") {
    echo "<h1>" . $grade . "は</h1>";
    switch ($grade) {
        case 'A':
            echo "<p>よく出来る</p>";
            break;
        case 'B':
            echo "<p>出来る</p>";
            break;
        case 'C':
            echo "<p>普通</p>";
            break;
        default:
            echo "<p>努力してください</p>";
            break;
    }
}
?>
<p>
<input type="submit" value="send" name="send">
</p>
</form>
</body>
</html>