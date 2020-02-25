<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>時刻の表示</title>
</head>
<body>
    <p>
    <?php
    date_default_timezone_get("Asia/Tokyo");
    echo "<h1>今日は、";
    echo date("y/m/d");
    echo "です。</h1>";
    echo "<h2>現在の時刻は、";
    echo date("h:i:s") ."です。</h2>";
    ?>
    <?php
    echo
    ?>
    </p>
</body>
</html>