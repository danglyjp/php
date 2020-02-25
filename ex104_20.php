<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ex104 do~while 文</title>
</head>

<body>
    <h1>do ~ while 文</h1>
    <hr>
    <?php
    $cnt = 0;
    do {
        echo $cnt . "回目<br>";
        $cnt++;
    } while ($cnt < 10)
        ?>
</body>

</html>