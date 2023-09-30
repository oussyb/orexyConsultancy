<?php

// die($_POST);


$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

// $test_info = [
//    'name' => $name,
//    'email' => $email,
//    'msg' => $msg
// ];

// var_dump($test_info);

//$name ='9Ous';
// $email = 'test';
// $msg = 'this is a test';

$conn = new mysqli('localhost', 'root', '', 'my_dummy');

if($conn->connect_error){
   die('Connection Failed :'.$conn->connect_error);
}else{
   
   echo "successful";
   $stmt = $conn->prepare("insert into data (name, email,msg) values(?,?,?)");
   $stmt->bind_param("sss",$name, $email, $msg);
   $stmt->execute();
   $stmt->close();
   $conn->close();
}

