<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample09</title>
</head>
<body>
<h2>the color of the rainbow</h2>
<?php
$color= array("red","orange","yellow","green","blue","indigo","violet");

for ($i=0; $i < count($color) ; $i++) { 
    echo $color[$i]."<br>";
}

?>
    
</body>
</html>