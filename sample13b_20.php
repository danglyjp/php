<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample13b_18020</title>
</head>
<body>
<form action="" method="post">
<?php
if (isset($_POST["send"])) {
echo "<h2>元にのデータ</h2>";
for ($i=0; $i < 5; $i++) { 
    $id="d_".$i;
    echo "<input type='text' size='5' name='".$id."' value='".$_POST[$id]."'><br>";
    $num1[$i]=$_POST[$id];
}
echo "<h2>並べ替え前</h2>";
disp_data($num1);

echo "<h2>並べ替え後（大きい順)</h2>";
$num2=sort_down($num1);
disp_data($num2);


echo "<h2>並べ替え後（小さい順)</h2>";
$num3=sort_up($num1);
disp_data($num3);

}else{
    echo "<h2>元にのデータ</h2>";
for ($i=0; $i < 5; $i++) { 
    $id="d_".$i;
    echo "<input type='text' size='5' name='".$id."' value=''><br>";
    $num1[$i]="";
}



}
function disp_data($n) {
echo "<table border=1><tr>";
for ($j=0; $j < count($n); $j++) { 
    echo "<td width=20>".$n[$j]."</td>";
}
echo "</tr></table>";
}

function sort_down($m) {
for ($p=0; $p < count($m) ; $p++) { 
    for ($q=$p+1; $q <count($m) ; $q++) { 
        if ($m[$p] < $m[$q]) {
        $temp=$m[$p];
        $m[$p]=$m[$q];
        $m[$q]=$temp;

        }
    }
}
return $m;
}
function sort_up($m) {
    for ($p=0; $p < count($m) ; $p++) { 
        for ($q=$p+1; $q <count($m) ; $q++) { 
            if ($m[$p] > $m[$q]) {
            $temp=$m[$p];
            $m[$p]=$m[$q];
            $m[$q]=$temp;
    
            }
        }
    }
    return $m;
    }
?>
<p><input type="submit" value="send" name="send"></p>

</form>
</body>
</html>