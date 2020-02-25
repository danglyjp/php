<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample12b_20</title>
</head>
<body>

<?php
echo $str="Keep our Earth clear. Save the children.";
echo "<br>";
check("đây là chữ viết thường1");
check("ĐÂY LÀ CHỮ VIẾT HOA2");

function check($str2){
    if (!ctype_lower($str2)) {
       echo strtoupper($str2); 
    } else if(ctype_upper($str2)) {
       echo strtolower($str2);
    } else {
        echo "NO";
    }
}




?>   
</body>
</html>