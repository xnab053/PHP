<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習2024-04-15</title>
    <style>

        table{
            border-collapse: collapse;
        }
        
        td{
            border:1px solid gray;
            padding: 3px 6px;
            font-size:18px;
        }

        #grid table{
            border-collapse: collapse;
        }
        
        #grid td{
            border:1px solid gray;
            padding: 3px 6px;
            font-size:18px;
        }
        #grid tr:nth-child(1) td,
        #grid td:nth-child(1){
            background:rgba(82, 46, 36, 0.8);
            color:#ccc;
        }
    </style>
</head>
<body>
    <h1>九九乘法表-簡單</h1>
    <?php

    for($j=1;$j<=9;$j++){
        
        for($i=1;$i<=9;$i++){
                echo $j."x". $i ."=".($i*$j);
                echo " , ";
                }
                echo "<br>";
        }

    ?>

    <h2>九九乘法表-表格</h2>

    <?php
echo "<table>";
    for($j=1;$j<=9;$j++){
        echo "<tr>"; 
        for($i=1;$i<=9;$i++){

                echo "<td>".$j."x". $i ."=".($i*$j)."</td>";
                
                }
        echo "</tr>";
        }
echo "</table>";
    ?>

<h2>九九乘法表-棋盤式表格</h2>

<?php
echo "<table id='grid'>";
for($j=0;$j<=9;$j++){
    echo "<tr>"; 
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
        echo " ";
        }elseif($j==0){
        echo $i;
        }elseif($i==0){
        echo $j;
        }else{
        echo ($i*$j);
     }  
     echo "</td>";
}                
    echo "</tr>";
}
echo "</table>";
?>

<h2>尋找字元(使用while)</h2>
<ul>
    <li>給定一個字串句子</li>
    <li>給定一個單字或字母</li>
    <li>尋找相符的內容</li>
    <li>印出尋找到的單字或字母所在句子中的位置</li>
</ul>
<p>例:14日播出的《淚之女王》第12集中白賢祐（金秀賢 飾）向洪海仁（金智媛 飾）提出了取消離婚的要求，但因洪海仁逐漸喪失記憶未能實現。</p>
<?php
$str="14日播出的《淚之女王》第12集中白賢祐（金秀賢 飾）向洪海仁（金智媛 飾）提出了取消離婚的要求，但因洪海仁逐漸喪失記憶未能實現。";

$target="金秀賢";
$position=0;
while($target!=mb_substr($str,$position,mb_strlen($target))){
    // echo "p="..$position;
    // echo ", substr = ".mb_substr($str,$position,mb_strlen($target));
    // echo "<br>";
    $position=$position+1;
}

echo $target."的位置在".$position;
echo "<br>";
// echo mb_strpos($str,$target)


?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



<hr>
        <a href="index.html">回首頁</a>
   
</body>
</html>