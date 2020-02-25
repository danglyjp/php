<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ex02 switch 文</title>
</head>

<body>
    <?php
    $color = "青";
    switch ($color) {
        case "赤":
            echo "止まってください！";
            break;
        case "青":
            echo "進め！";
            break;
        case "緑":
            echo "進んでください";
            break;
            　　default: echo "左右の確認を!";
            break;
    }
    ?>
</body>

</html>