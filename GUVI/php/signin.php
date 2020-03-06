<?php

error_reporting(0);
$connection = mysqli_connect("localhost", "jesuva", "root123","guviusers");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name=$_POST['name1'];
$password=$_POST['password1'];

$query="select * from userdetails where name=? and password=?";
$stmt=$connection->prepare($query);
$stmt->bind_param("ss",$name,$password);
$stmt->execute();
$stmt->bind_result($name,$password);
$stmt->store_result();
if ($stmt->num_rows==1){
   $_SESSION['session_name']=$name;
   $id = $_SESSION['session_name'];
   session_start();
   echo $id;
}
else{
    echo 'Failed';
    session_destroy();
   
}

?>