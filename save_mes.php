<?php
include('dbconn.php');

if (isset($_POST['save'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   $sql = "INSERT INTO `message`( `Name`, `Email`, `Subject`, `Message`) VALUES('$name','$email','$subject','$message')";
   if (mysqli_query($conn,$sql)) {
    echo "<script>alert('Message Saved!')</script>";
    echo"<script>window.open('contact.html','_self')</script>";
   }

}

?>