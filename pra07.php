<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆製作</title>
    <style>
        table{
            border-collapse: collapse;
            background-color: rgb(235, 230, 239);
        }
        
        td{
            border:1px solid black;
            padding: 10px 13px;
            font-size:20px;
        }

       
        
        
    </style>
</head>
<body>
<h2>線上月曆製作</h2>

<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>

<?php
$month=4;
echo "月份:".$month;
echo "<br>";
$firstDay=strtotime(date("Y-$month-1"));
$firstWeekStarDay=date("w",$firstDay);
echo "第一週的開始是第".$firstWeekStarDay."日";
$days=date("t",$firstDay);
$lastDay=strtotime(date("Y-$month-$days"));
echo "<br>";
echo "最後一天是".date("Y-m-d",$lastDay);


echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";

for($i=0;$i<6;$i++){
    echo "<tr>"; 
    for($j=0;$j<7;$j++){
        if($i==0 && $j>=$firstWeekStarDay){
            echo "<td>";
            echo $i*7+$j-($firstWeekStarDay-1);
            echo "</td>";
        }else if($i>0){
            echo "<td>";
            if($i*7+$j-($firstWeekStarDay-1)<=$days){
                echo $i*7+$j-($firstWeekStarDay-1);
            }else{
                echo "&nbsp;";
            }
            echo "</td>";
        }else{
            echo "<td></td>";
        }
        
}                
    echo "</tr>";
}
echo "</table>";
?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr>
        <a href="index.html">回首頁</a> 
</body>
</html>