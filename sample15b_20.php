<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample15_20</title>
    <style>
    body{background-color:pink;}
    table{background-color:white;}
    th{background-color:tan;}
    </style>
</head>
<body>
<h1>データベース操作の基礎</h1>
<?php
$mysql = new mysqli("localhost","root","","db1");

if ($mysql->connect_error) {
    echo "cannot connect<br>";
    exit();
} else {
   $mysql->set_charset("utf8");
}

$result= $mysql->query("select * from prefecturals");
if($result->num_rows != 0){
    echo "<table border='1'><tr>";
    echo "<th>CustomerID</th><th>CustomerCode</th><th>CustomerName</th><th>Address</th></tr>";
    
while ($row=$result->fetch_object()) {
    
    $col1=$row->CustomerID;
    $col2=$row->CustomerCode;
    $col3=$row->CustomerName;
    $col4=$row->Address;
    
echo "<tr><td>".$col1."</td>";
echo "<td>".$col2."</td></tr>";
}
echo "</table>";
}else {
    echo "データはありませんでした";
}
$mysql->close();
?>
</body>
</html>