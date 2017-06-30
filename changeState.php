<?php
/**
 * Created by PhpStorm.
 * User: Arosha D
 * Date: 6/30/2017
 * Time: 4:10 PM
 */
 require 'connect.inc.php';

$servername = "www.karunasinghe.com";
$username = "dileep";
$password = "dileep@123";
$dbname = "IOT";


$conn = new mysqli($servername, $username, $password, $dbname);

$state = $_POST['state'];
$alert_id = $_POST['alert_id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE alert SET State='$state' WHERE Alert_ID='$alert_id'";

if ($conn->query($sql) === TRUE) {
    echo nl2br("State Updated!\n");
} else {
    echo nl2br("Error updating record: " . $conn->error . "\n");
}

$conn->close();

?>

