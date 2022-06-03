<?php
// connecting to the database
include 'db_connect.php';

$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];
$sql = "INSERT INTO `msgs` (`msg`, `room`, `ip`, `stime`) VALUES ('$msg','$room','$ip',CURRENT_TIMESTAMP); ";
if (mysqli_query($conn,$sql);
else
{
    echo mysqli_error($conn);
}
    
mysqli_close($conn);
?>
