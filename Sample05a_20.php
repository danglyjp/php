<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample05a</title>
</head>
<body>
<form action="" method="post">
<?php
 $n="";
if (isset($_POST["send"])) {

    $n = $_POST["n"];

    switch ($n % 2) {
        case 0:
            echo "<p><b>偶数です</b></p>";
            break;

        default:
            echo "<p><b>奇数です</b></p>";
            break;
    }
}
echo "<input type='text' size='5' name='n'　value='.$n.'><br>";
echo "<input type='submit' name='send' value='send'>";
?>
</form>
</body>
</html>