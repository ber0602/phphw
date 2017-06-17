<?php

$link=mysqli_connect(
		'localhost',
		'root',
		'a1043328',
		'phphw');

if($link){
	echo "DB Connected!"."<br><br>";
}else{
	echo "DB Connected Failed"."<br><br>";
}

$name=$_GET["name"];
$date=$_GET["date"];
$job=$_GET["job"];
$ID=$_GET["ID"];
$email=$_GET["email"];
$tel=$_GET["tel"];
$address=$_GET["address"];


mysqli_query($link," INSERT INTO table(name,date,job,ID,email,tel,address) VALUES ('$name','$date','$job','$ID','$email','$tel','$address')");

$result=mysqli_query($link," SELECT * FROM php");

while ($row=mysqli_fetch_assoc($result)) {
		echo $row['name'],"  ",$row['date'],"  ",$row['job'],"  ",$row['ID'],"  ",$row['email']," ",$row['email']," ",$row['tel']," ",$row['address'],"<br> ";
	}

mysqli_close($link);


?>
