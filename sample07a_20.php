<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="post">
<?php
if (isset($_POST["send"])) {
    # code...
    $num = $_POST["nm"];
    echo "<h3>While 文</h3>";
    $msg1 = "";
    $cnt = 1;
    while ($cnt <= $num) {
        # code...
        $msg1 = $msg1 . $cnt . "回目\n";
        $cnt++;
    }
    echo "<textarea rows=10 clos=10>" . $msg1 . "</textarea><br><br>";
    echo "<h3>do while 文</h3>";
    $num = $_POST["nm"];
    $cnt = 1;
    $msg2 = "";
    do {
        $msg2 = $msg2 . $cnt . "回目\n";
        $cnt++;
    } while ($cnt < $num);
    echo "<textarea rows=10 clos=40>" . $msg2 . "</textarea><br><br>";
} else {
    $num = "";
    # code...
}
echo "<p>num=<input type='text' name='nm' value='" . $num . "'></p>";
?>
<input type="submit" value="send" name="send">
</form>
</body>
</html>