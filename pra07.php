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
            border:1.5px solid #613030;
            padding: 10px 13px;
            font-size:20px;
            color:#613030;
            
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
$year=date("Y");
echo "年份:".$year;
echo "<br>";
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
$birthday='2000-4-21';


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
        $date=$year.'-'.$month.'-'.$i*7+$j-($firstWeekStarDay-1);
        $replace=mb_substr($birthday,0,4);
        $replaceTo=str_replace($replace,date("Y"),$birthday);
        $spDate=strtotime($replaceTo);
        $dateSec=strtotime($date);
        if($i==0 && $j>=$firstWeekStarDay){
            if($spDate==$dateSec){
                echo "<td style='background-color:#FF9797;font-weight:bolder;font: size 24px;color:#804040'>";
            }else if(date("w",strtotime($date))==0 || date("w",strtotime($date))==6){
                echo "<td style='background-color :	#FFD2D2'>";
            }else{
                echo "<td>";
            }
            echo $i*7+$j-($firstWeekStarDay-1);
            echo "</td>";
        }else if($i>0){
            if($spDate==$dateSec){
                echo "<td style='background-color:#FF9797;font-weight:bolder;font: size 24px;color:#804040'>";
            }else if(date("w",strtotime($date))==0 || date("w",strtotime($date))==6){
                echo "<td style='background-color :	#FFD2D2'>";
            }else{
                echo "<td>";
            }
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



<br>
    <style>
        .block-table{
            width: 357px;
            display:flex;
            flex-wrap:wrap;
        }

        .item{
            margin-left:-1px;
            margin-top:-1px;
            display:inline-block;
            width: 50px;
            height: 50px;
            border:1px solid #613030;
            position:relative;
            transition:all 0.3s;
            background:white;
        }

        .item-header{
            margin-left:-1px;
            margin-top:-1px;
            display:inline-block;
            width:50px;
            height:25px;
            border:1px solid #613030;
            text-align: center;
            background-color: #E1C4C4; 
            color:#613030;
        }

        .item:hover{
            background:#EBD3E8;
            transform:scale(1.3);
            font-weight:bold;
            color:#8080C0;
            transition: all 0.3s;
            z-index:10;
        }

        .holiday{
            background:#FFD2D2;
        }

    </style>



<?php


$days=[];
for($i=0;$i<42;$i++){
    $diff=$i-$firstWeekStarDay;
    $days[]=date("Y-m-d",strtotime("$diff days",$firstDay));
}
// echo "<pre>";
// print_r($days);
// echo "</pre>";
echo "<div class='block-table'>";
echo "<div class='item-header'>日</div>";
echo "<div class='item-header'>一</div>";
echo "<div class='item-header'>二</div>";
echo "<div class='item-header'>三</div>";
echo "<div class='item-header'>四</div>";
echo "<div class='item-header'>五</div>";
echo "<div class='item-header'>六</div>";


foreach($days as $day){
    $format=explode("-",$day)[2];
    $w=date("w",strtotime($day));
    if($w==0 || $w==6){

        echo "<div class='item holiday'>$format</div>";
    }else{

        echo "<div class='item'>";
        echo "<div class='date'>$format</div>";
        echo "</div>";
    }
}
echo "</div>";




?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr>
        <a href="index.html">回首頁</a> 
</body>
</html>