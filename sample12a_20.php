<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample12a_20</title>
</head>
<body>

<?php
echo $str="Keep our Earth clear. Save the children.";
echo "<br>";
echo substr($str,22,strpos($str,".")+1);
echo " ";
echo substr($str,0,strpos($str,".")+1);
?>   
</body>
</html>