<?php
$name=$_POST['name'];
$password=$_POST['password'];

//Database Connection
$conn = new mysqli('localhost','root','','reg');
if($conn->connect_error){
  die('connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into sign(name, password)
    values(?,?)");
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();
    echo "SignedIn Successfully";
    $stmt->close();
    $conn->close();
}
?>