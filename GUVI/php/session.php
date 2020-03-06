<?php
$connection = mysqli_connect("localhost", "jesuva", "root123","guviusers");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (!isset($_SESSION['session_name'])){
    header("location:index.html");
}
else{
    $name=$_SESSION['session_name'];
    echo $name;
}
?>