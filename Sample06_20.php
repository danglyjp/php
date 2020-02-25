<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample06</title>
</head>
<body>
<form action="" method="post">
<?php
$rb[0]=""; $rb[1]=""; $rb[2]=""; $rb[3]=""; $rb[4]=""; $rb[5]="";


if (isset($_POST["send"])) {
    if (isset($_POST["size"])) {
        $i=$_POST["size"];
        $rb[$i-1]="checked";
        echo "<h".$i.">This is PHP program</h".$i.">";
    }
    else {
        echo "h-tag is not specified <br>";
    }
} 
  

echo "<p>Hello, PHP word!</p>";
print "<p>PHP is use for <br> sever program.</p>";

for ($i=1; $i<=6 ; $i++) { 
   echo "<input type='radio' name='size' value='".$i."' "
   .$rb[$i-1].">h".$i."タグ     " ;
}

?>
<p>
<input type="submit" name="send" value="send">
</p>
</form>
</body>
</html>