<?php
include("dbconn.php");

$name = POST['name'];
$email = POST['email'];
$subject = POST['subject'];
$message = POST['messgae'];

$query = "INSERT INTO `message`( `Name`, `Email`, `Subject`, `Message`) VALUES('$name','$email','$subject','$message')";

if (mysqli_query($conn,$query)) {
    echo json_encode(array("statusCode"=>200));
}
else {
    echo json_encode(array("statusCode"=>201));
}

?>