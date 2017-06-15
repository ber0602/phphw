<?php
$input=$_GET["month"];

for($i=1;$i<=12;$i++){
	if($input==$i){
		echo "<img src=\"'.$i.'.png\"><br>";
	}
}


$datetime = new Datetime("now",new DateTimeZone('Asia/Taipei')); 
$now="now";
$end="2017-12-31 24:0:0";
echo "現在是 ";
echo $datetime->format('Y-m-d')."</br>";
echo "台灣時間 ";
echo $datetime->format("H:i:s")."</br>";


echo "距離世界末日(2017年12月31日)還剩下 ";
$second1=floor((strtotime($end)-strtotime($now)));
echo floor($second1/86400).'天';
echo floor(($second1%86400)/3600).'小時';
echo floor((($second1%86400)%3600)/60).'分鐘';
echo floor((($second1%86400)%3600)%60)."秒<br>";

?>
