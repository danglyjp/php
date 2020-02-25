<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample10</title>
</head>
<body>
<form action="" method="post">
<?php
$N=5;
if (isset($_POST["send"])) {
for ($i=0; $i < $N; $i++) { 
    $id="p".$i;
    $point[$i]=$sort[$i]=$_POST[$id];
}
for ($i=0; $i <$N-1 ; $i++) { 
    for ($j=$i+1; $j < $N; $j++) { 
        if ($sort[$i]<$sort[$j]) {
        $temp=$sort[$i];
        $sort[$i]=$sort[$j];
        $sort[$j]=$temp;
        }
    }
}
}else {
    for ($i=0; $i < $N; $i++) { 
        $point[$i]="";
        $sort[$i]="";
    }
}



for ($i=0; $i < $N; $i++) { 
  echo  "berore: <input type='text' name='p".$i."' value='".$point[$i]."' >     ";
  if ($sort[$i] != "") {
    echo  "     after:<input type='text' name='p".$i."' value='".$sort[$i]."' >";
  }
  echo "<br>";
}
?>

<input type="submit" value="sort" name="send">
</form>

    
</body>
</html>