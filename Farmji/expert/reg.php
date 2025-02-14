<?php
$name=$_POST['name'];
$password=$_POST['password'];

//Database Connection
$conn = new mysqli('localhost','root','','fcontact');
if($conn->connect_error){
  die('connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into signIn(name, password)
    values(?,?)");
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>