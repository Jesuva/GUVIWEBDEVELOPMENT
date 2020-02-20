<?php
$connection = mysqli_connect("localhost", "jesuva", "root123","guviusers");
$name=$_POST['userName'];
$password=$_POST['userPassword'];
$query=mysqli_query($connection,"select * from new_user where name='$name' and password='$password'");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (mysqli_num_rows($query)==1){
    echo '<script>alert("Welcome Guvian!");window.location.href="profile.html"</script>';
}
else{
    echo '<script>alert("Check your username and password");window.location.href="index.html"</script>';
 
}
?>