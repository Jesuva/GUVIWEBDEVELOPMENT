<?php
session_start();
if(isset($_SESSION['session_name'])){
    echo "true";
}
else{
    echo "Failed";
    header("Location:index.html");
}
?>