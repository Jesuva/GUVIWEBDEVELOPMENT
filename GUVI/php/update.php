<?php
$connection=mysqli_connect("localhost","jesuva","root123","guviusers");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$dob = $_POST['dob'];
$age = 10;
$year = $_POST['year'];
$college = $_POST['college'];
$dept = $_POST['dept'];
$contact = $_POST['contact'];
$name = $_POST['name'];
echo $college;
$result = mysqli_query($connection,"select userId from new_user where name='$name'");
$row = mysqli_fetch_assoc($result);
$id=$row['userId'];
$checkUserProfile = mysqli_query($connection,"select * from user_profile where userId='$id'");
$userRow = mysqli_fetch_assoc($checkUserProfile);
$userId = $userRow['userId'];
echo $id;
echo $userId;
if(is_null($userId)){
    $query = $connection->prepare("INSERT INTO 'user_profile' (`userId`, `dob`, `age`, `contact`, `college`, `department`, `year`) VALUES (?,?,?,?,?,?,?)");
    $query->bind_param("issssss",$id,$dob,$age,$contact,$college,$dept,$year);
    $query->execute();
    echo "inserted";
}
else{
    if($query = $connection->prepare("UPDATE 'user_profile' SET `userId`=?,`dob`=?,`age`=?,`contact`=?,`college`=?,`department`=?,`year`=? WHERE userId=?"))
    {
        $query->bind_param("ssssssss",$id,$dob,$age,$contact,$college,$dept,$year,$id);
    $query->execute();
    echo '<script>window.location.href="index.html"</script>';

    }
    else{
        $error = $connection->errno.' '. $connection->error;
        echo $error;
    }
    
    
   
    
}
?>
