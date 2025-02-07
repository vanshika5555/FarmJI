<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];

//Database Connection
$conn = new mysqli('localhost','root','','fcontact');
if($conn->connect_error){
  die('connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into contactUs(name, email, number, message)
    values(?,?,?,?)");
    $stmt->bind_param("ssis", $name, $email, $number, $message);
    $stmt->execute();
    echo "registration Successfully";
    $stmt->close();
    $conn->close();
}