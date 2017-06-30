<?php
/**
 * Created by PhpStorm.
 * User: Arosha D
 * Date: 6/30/2017
 * Time: 1:41 PM
 */

require 'connect.inc.php';

$email = $_POST["email"];
$password = $_POST["password"];
$query="SELECT `id`, `password` FROM `user` WHERE `email`='$email'";

if($query_run=mysql_query($query)){
    if(mysql_num_rows($query_run)!=0){
        $query_row = mysql_fetch_assoc($query_run);
        if(md5($password) == $query_row['password']){
            echo nl2br("Login Successful!\n");
            getAlerts($query_row['id']);
        }
        else{
            echo nl2br("Wrong password!\n");
        }

    }
    else{
        echo nl2br("Invalid Email!\n");
    }
}
else{
    echo mysql_error();
}


function getAlerts($user_id)
{
    $sql_get = "SELECT `Alert_ID`, `Timestamp`, `Group`, `Message` FROM `alert` where user_id = '$user_id' and State = 'active'";
    if ($query_run = mysql_query($sql_get)) {
        if (mysql_num_rows($query_run) != 0) {
            while ($query_row = mysql_fetch_assoc($query_run)) {
                echo nl2br($query_row['Alert_ID'] . " * " . $query_row['Timestamp'] . " * " . $query_row['Group'] . " * " . $query_row['Message'] . "\n");
            }
        }
        else {
            echo nl2br("No Alerts!\n");
        }
    }
    else {
        echo mysql_error();
    }
}


?>
