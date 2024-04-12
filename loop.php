<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>for</h2>
<?php
//$i=$i+1;(i++簡寫)
for($i=0;$i<10;$i++){
    echo $i*10;
    echo "<br>";
}

echo "<br>";
echo $i;

echo "<hr>";

?>

<h2>while</h2>
<?php
$score=10;
echo "原始成績".$score;
while($score<60){
    $score=$score+10;
}

echo "<br>";
echo "調整結果=".$score;

echo "<hr>";

?>

<h2>巢狀結構</h2>
<?php

$show=false;

for($i=0 ; $i<10 ; $i++){
    echo $i*10;
    
    if($i>5 && $show==false){
        echo "<br>";
        echo "執行一半了...";
        $show=true;
    }
    echo "<br>";

}

//if中只放變數的應用
$a=true;
if($a){
    echo"TRUE";
}else{
    echo"FALSE";
}

?>

<hr>
    <a href="index.html">回首頁</a>

</body>
</html>
