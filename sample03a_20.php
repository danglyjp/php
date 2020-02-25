<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Sample03a</title>
</head>

<body>
    <form action="" method="post">
        <?php
$rdv[0] = '';
$rdv[1] = '';
$rdv[2] = '';

$cbv[0] = '';
$cbv[1] = '';
$cbv[2] = '';
if (isset($_POST["btn"])) {
    if (isset($_POST["rd"])) {
        $rdv[$_POST["rd"]] = "checked";

        $tm=$_POST["rd"];

        if ($tm == 0) {
            echo "<p><b>洋食</b></p>";
        }else if ($tm == 1) {
            echo "<p><b>和食</b></p>";
        }else if($tm == 2){
            echo "<p><b>中華</b></p>";
        }

    }

    if (isset($_POST["cb"])) {

        for ($i = 0; $i < count($_POST["cb"]); $i++) {
            $v =$cbv[$_POST["cb"][$i]] = 'checked';

        }
    }
}

echo "<input type='radio' name='rd' value='0'" . $rdv[0] . ">パン";
echo "<input type='radio' name='rd' value='1'" . $rdv[1] . ">おにぎり";
echo "<input type='radio' name='rd' value='2'" . $rdv[2] . ">ラメン";
echo "<br><br>";
echo "<input type='checkbox' name='cb[]' value='0'" . $cbv[0] . ">パン";
echo "<input type='checkbox' name='cb[]' value='1'" . $cbv[1] . ">おにぎり";
echo "<input type='checkbox' name='cb[]' value='2'" . $cbv[2] . ">ラメン";
echo "<br><br>";
echo "<input type='submit' name='btn' value='送信'>";
?>
    </form>
</body>

</html>