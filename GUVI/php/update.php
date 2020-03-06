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
$name = $_SESSION['session_name'];
$dataset = array();

$query = "select id from userdetails where 'name'=?";
$stmt = $connection->prepare($query);
$stmt->bind_param("s",$name);
$stmt->execute();
$stmt->store_result();
$row = mysqli_fetch_assoc($result);
$id=$row['name'];
    $query2 = "UPDATE `userdetails` SET `dob`=?,`age`=?,`contact`=?,`college`=?,`department`=?,`year`=? WHERE id=?";
    $stmt2=$connection->prepare($query2);
    $stmt2->bind_param("sssssss",$dob,$age,$contact,$college,$dept,$year,$id);
    $stmt2->execute();
    $stmt->store_result();
    while($row = mysqli_fetch_assoc($stmt2)){
        $dataset = $row;

    }
echo json_encode($dataset);    
?>
