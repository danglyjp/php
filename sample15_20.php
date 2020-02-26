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
$mysql = new mysqli("localhost","root","","test");

if ($mysql->connect_error) {
    echo "cannot connect<br>";
    exit();
} else {
   $mysql->set_charset("utf8");
}

$result= $mysql->query("select * from cds");
if($result->num_rows != 0){
    echo "<table border='1'><tr>";
    echo "<th>アーティスト</th><th>タイトル</th><th>リリース年度</th></tr>";
    
while ($row=$result->fetch_object()) {
    
    $col1=$row->title;
    $col2=$row->artist;
    $col3=$row->releasedate;
echo "<tr><td>".$col1."</td>";
echo "<td>".$col2."</td><td>".$col3."</td></tr>";
}
echo "</table>";
}else {
    echo "データはありませんでした";
}
$mysql->close();
?>
</body>
</html>