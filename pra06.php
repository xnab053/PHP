<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>時間及日期處理</title>
</head>
<body>
<h2>給定兩個日期，計算中間間隔天數</h2>

<?php
$start="2022-11-21";
$end="2024-4-25";
// 30天
$start=strtotime($start);
$end=strtotime($end);
echo '開始日:'.$start;
echo "<br>";
echo '結束日:'.$end;
echo "<br>";

$diff=$end-$start;
echo $diff/(60*60*24);
?>
 <hr>   
<h2>計算距離自己下一次生日還有幾天</h2>

<?php
echo "今年是".date("Y");
echo "<br>";
echo "今天是".date("Y年m月d日");
echo "<br>";
$birthday="2001-1-2";
$start=strtotime(date('Y-m-d'));
$tb=str_replace(mb_substr($birthday,0,4),date("Y"),$birthday);
if(strtotime($tb)<strtotime('now')){
    $tb=str_replace(mb_substr($birthday,0,4),date("Y")+1,$birthday);
}
$end=strtotime($tb);
$diff=$end-$start;
echo "距離生日還有:".floor($diff/(60*60*24))."天";

?>

<hr>
<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>

<ul>
    <li>2024/4/25</li>
    <li>4月25日 Tuesday</li>
    <li>2024-4-25 12:9:5</li>
    <li>2024-4-25 12:09:05</li>
    <li>今天是西元2024年4月25日 上班日(或假日)</li>
</ul>

<?php
date_default_timezone_set('Asia/Taipei');
echo date("Y/n/d");
echo "<br>";
echo date("n月j日 l");
echo "<br>";
echo date("Y-n-j G:i:s");
echo "<br>";
echo date("Y-n-j H:i:").(int)date("s");
echo "<br>";
$workday=(date("N")<6)?"上班日":"假日";

echo "今天是西元".date("Y/n/d"). "是$workday";

?>

<h2>利用迴圈來計算連續五個周一的日期</h2>
例:
<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>

<?php
$date='2024-04-25';
$week=[1=>'星期一',2=>'星期二',3=>'星期三',4=>'星期四',5=>'星期五',6=>'星期六',7=>'星期日'];
for($i=0;$i<5;$i++){
    $day=strtotime("+$i week",strtotime($date));
    echo date("Y-m-d",$day);
    echo $week[date("N",$day)];
    echo "<br>";
}

?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr>
        <a href="index.html">回首頁</a> 
</body>
</html>