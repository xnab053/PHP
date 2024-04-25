<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理</title>
</head>
<body>
    <h2>字串取代</h2>
<ul>
    <li>將”aaddw1123”改成”*********”</li>
</ul>
<?php
$s='aaddw1123';
// $s=str_replace('a','*',$s);
// echo $s;
// echo "<br>";
// $s=str_replace('d','*',$s);
// echo $s;
// echo "<br>";
// $s=str_replace('w','*',$s);
// echo $s;
// echo "<br>";
// $s=str_replace('1','*',$s);
// echo $s;
// echo "<br>";
// $s=str_replace('2','*',$s);
// echo $s;
// echo "<br>";
// $s=str_replace('3','*',$s);
// echo $s;
// echo "<br>";

$s=str_replace(['a','d','w','1','2','3'],'*',$s);
echo $s;
echo "<br>";

$s=str_repeat("*",mb_strlen($s));
echo $s;

?>
<hr>
<h2>字串分割</h2>

<ul>
    <li>將”this,is,a,book”依”,”切割後成為陣列</li>
</ul>

<?php
$s='this,is,a,book';
$result=explode(",",$s);
echo "<pre>";
print_r($result);
echo "</pre>";

?>
<hr>
<h2>字串組合</h2>

<ul>
    <li>將上例陣列重新組合成“this is a book”</li>
</ul>

<?php
$result=join(' ',$result);
echo $result;

?>
<hr>
<h2>子字串取用</h2>

<li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li>

<?php
$s='The reason why a great man is great is that he resolves to be a great man';
$new=mb_substr($s,0,10);
echo $new;
echo "...";
echo "<br>";
// echo str_repeat("...",3);
$s='《殺人者的難堪》在Netflix全球非英語排行榜上蟬聯冠軍，此劇透過「怡蕩」一角，展現從一名大學生轉變為自認正義的判官的心路歷程。';
$new=mb_substr($s,0,50);
echo $new;
echo "...";

?>
<hr>
<h2>尋找字串與HTML、css整合應用</h2>

<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色</li>
</ul>

<?php
$key='PHP';
$color='red';
$size='36px';
$s="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$s=str_replace($key,"<span style='color:$color;font-size:$size'>$key</span>",$s);

echo $s;

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr>
        <a href="index.html">回首頁</a> 
</body>
</html>