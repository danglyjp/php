<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Sample2a 計算</title>
</head>

<body>
    <form action="" method="post">
        <?php
        if (isset($_POST["send"])) {
            $n = $_POST["n"];
            $m = $_POST["m"];

                if (($n == "") || ($m == "")) {
                    $add = "";
                    $dif = "";
                    $mul = "";
                    $div = "";
                } else {
                    $add = $n + $m;
                    $dif = $n - $m;
                    $mul = $n * $m;
                    if (($m == 0) || ($m == "0")) {
                        $div = "";
                    } else {
                        $div = $n / $m;
                    }
                }
        } else {
            $n = "";
            $m = "";
            $add = "";
            $dif = "";
            $mul = "";
            $div = "";
        }


        echo "n<input type=text name='n' size=3 value='" . $n . "'>&nbsp;&nbsp;";
        echo "m<input type=text name='m' size=3 value='" . $m . "'><br><br>";

        echo "足し算" . $add . "<br>";
        echo "引き算" . $dif . "<br>";
        echo "掛け算" . $mul . "<br>";
        echo "割り算" . $div . "<br>";
        ?>
        <input type="submit" name="send" value="send">
    </form>
</body>

</html>