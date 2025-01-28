<?php
$course_name=$_POST['course_name'];
$price=$_POST['course_price'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

include 'instamojo/Instamojo.php';


$authType = "app/user" 

$api = Instamojo\Instamojo::init($authType,[
        "client_id" =>  'XXXXXQAZ',
        "client_secret" => 'XXXXQWE',
        "username" => 'FOO', 
        "password" => 'XXXXXXXX' /

         ],true); 

try {
    $response = $api->createPaymentRequest(array(
        "purpose" => $course_name,
        "amount" => $price,
        "send_email" => true,
        "email" =>$email,
        "redirect_url" => "http://localhost/COURSE1/thankyou.php"
        ));
    print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
        
?>
