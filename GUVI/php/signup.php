<?php
//session_start();
$name=$_POST['name1'];
$email=$_POST['email1'];
$password=$_POST['password1'];
$id=rand($min=1000,$max=100000);
$connection = mysqli_connect("localhost", "jesuva", "root123","guviusers");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    $checkusername = mysqli_query($connection,"select * from  userdetails where name='$name'");
    $checkusermail = mysqli_query($connection,"select * from  userdetails where  email='$email'");
    if(mysqli_num_rows($checkusername)>0){
         echo 'Username already Exists!';
    }
    if (mysqli_num_rows($checkusermail)>0){
        echo 'Email already Exists!';

    }
    if (mysqli_num_rows($checkusermail)<1 && mysqli_num_rows($checkusername)<1){    
    $query = $connection->prepare("INSERT INTO `userdetails`(`id`, `name`, `email`, `password`) VALUES (?,?,?,?)");
    $query->bind_param("isss",$id,$name,$email,$password);
    $query->execute();
    $_SESSION['session_name']=$name;
    $sessionid = $_SESSION['session_name'];   
    echo $sessionid;
    }
        


}
    

?>