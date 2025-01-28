<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


//Database Connection
$conn = new mysqli('localhost','root','','regi');
if($conn->connect_error){
  die('connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into signup(name, email, password)
    values(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    echo "SignedIn Successfully";
    $stmt->close();
    $conn->close();
}
?>