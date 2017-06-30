<?php
$mysql_host="www.karunasinghe.com";
$mysql_user="dileep";
$mysql_pass="dileep@123";

$mysql_error_text="Connection error!";
$mysql_db="IOT";


if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db("$mysql_db")){
		echo $mysql_error_text;
}
else{//echo "Connected";
}


?>
	