<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星</title>
    <style>
        *{
            font-family:'Courier New',Courier,monospace;
        }
    </style>
</head>
<body>
    
<h2>以 * 符號為基礎在網頁上排列出下列圖形</h2>

<h3>直角三角形</h3>
<?php

$stars=7;

for($i=0;$i<$stars;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>

<h3>倒直角三角形</h3>
<?php

for($i=$stars;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>

<h3>正三角形</h3>
<?php

for($i=0;$i<$stars;$i++){

    for($k=0; $k <$stars-1-$i;$k++){
        echo "&nbsp;";    
    }
    
    for($j=0; $j<$i*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<h3>菱形</h3>
<?php

$odd=($stars%2==0)?$stars+1:$stars;
$mid=(($odd+1)/2)-1;

for($i=0;$i<$stars;$i++){

    if($i<=$mid){
        $tmp=$i;
    }else{
        // $tmp--;
        $tmp=$tmp-1;
    }

    for($k=0; $k<$mid-$tmp;$k++){
        echo "&nbsp;";    
    }
    
    for($j=0;$j<$tmp*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}

/*兩個迴圈版本

for($i=0;$i<$stars;$i++){

    for($k=0; $k<$stars-1-$i;$k++){
        echo "&nbsp;";    
    }
    
    for($j=0;$j<$i*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}

for($i=$stars-1
;$i>0;$i--){

    for($k=0; $k <$stars-$i;$k++){
        echo "&nbsp;";    
    }
    
    for($j=0; $j<$i*2-1;$j++){
        echo "*";
    }
    echo "<br>";
}*/
?>

<hr>
        <a href="index.html">回首頁</a>   
</body>
</html>