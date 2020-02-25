<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>101 if</title>
</head>

<body>
    <h1>if 文</h1>
    <hr>
    <?php
    $core = 45;
    echo "score は" . $core . "点<br><br>";
    if ($core >= 80) {
        echo "おめでとう！合格です！";
    } else if ($core >= 50) {
        echo "惜しい！もう少しです！";
    } else {
        echo "残念・・・不合格です！";
    }

    ?>
</body>

</html>