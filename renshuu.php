<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$server = "localhost";
$username = "root";
$pass = "";
$dbname = "ketnoisql";

$connect = mysqli_connect($server, $username, $pass, $dbname);
if ($connect) {
} else {
    echo "kết nối thất bại !";
}
?>

<?php

if (isset($_POST["THEM"])) {
    $TEN = $_POST["ten"];
    $QUE = $_POST["quequan"];
    $TUOI = $_POST["tuoi"];
    $v2 = mysql_query("INSERT INTO lop (ten, quequan, tuoi) VALUES　('$TEN','$QUE','$TUOI')") or die("Thêm mới thất bại");
}

?>

<form action="" method="post">
Tên      :<input type="text" name="ten" ><br>
Quê Quán:<input type="text" name="quequan" ><br>
Tuổi    :<input type="text" name="tuoi" ><br>
<input type="submit" name="THEM">

</form>
</body>
</html>
