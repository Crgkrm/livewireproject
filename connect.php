<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'registration';

$conn= new mysqli($server,$username,$password,$database);
if($conn->connect_error){
  die('connection failed :'.$conn->connect_error);

}else{
    $stmt=$conn->prepare("insert into data(name,email,password,gender)values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$password,$gender);
    $stmt->execute();
    echo "data registration was sucesfull....";
    $stmt->close();
    $conn->close();

}







?>