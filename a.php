<?php

$name=$_GET["name"];
$gender=$_GET["gender"];
$date=$_GET["date"];
$job=$_GET["job"];
$ID=$_GET["ID"];
$email=$_GET["email"];
$tel=$_GET["tel"];
$address=$_GET["address"];
$list_grade=$_GET["list_grade"];
$list_money=$_GET["list_money"];

$list_size=$_GET["list_size"];
$uname=$_GET["uname"];
$upwd=$_GET["upwd"];
$list_day=$_GET["list_day"];
$list_time=$_GET["list_time"];
$talk=$_GET["talk"];


echo "姓名: ".$name."<br/>";
echo "性別: ".$gender."<br/>";
echo "生日: ".$date."<br/>";
echo "職業: ".$job."<br/>";
echo "身分證字號: ".$ID."<br/>";
echo "聯絡信箱: ".$email."<br/>";
echo "聯絡電話: ".$tel."<br/>";
echo "住址: ".$address."<br/>";
echo "會員等級: ".$list_grade."<br/>";
echo "付費方式: ".$list_money."<br/>";

echo "運動服尺寸: ".$list_size."<br/>";
echo "會員帳號: ".$uname."<br/>";
echo "會員密碼: ".$upwd."<br/>";
echo "每周運動天數: ".$list_day."<br/>";
echo "每次運動的時間: ".$list_time."<br/>";
echo "想說的話: ".$talk."<br/>";

?>
