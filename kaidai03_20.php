<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai03</title>
</head>
<body  >

<form action="" method="post">
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["rd"])) {
        $cbv[$_POST["rd"]] = "checked";

        if ($_POST["rd"] == 0) {
            $v1 = 'style=background:red';
        } elseif (isset($_POST["rd"]) == 1) {
            $v1 = 'style=background:blue';
        } elseif (isset($_POST["rd"]) == 2) {
            $v1 = 'style=background:green';
        } else {
            echo "d";
        }
    }
}
?>
<h1><?php echo $v1 = ""; ?></h1>
<input type='radio' name="rd" value='0' . $cbv[0] . >赤
<input type="radio" name="rd" value='1' . $cbv[1] . >黄
<input type="radio" name="rd" value='2' . $cbv[2] . >緑
<br><br>
<input type="submit" name="submit" value="送信">
</form>
</body>
</html>