<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ex106 break and continue</title>
</head>

<body>
    <h1>break and continue</h1>
    <hr>
    <?php
    for ($i = 0; $i < 10; $i++) {
        if ($i == 2 || $i == 5) {
            continue;
        }
        if ($i == 8) {
            break;
        }

        
        echo $i . "回目<br>";
    }
    ?>
</body>

</html>