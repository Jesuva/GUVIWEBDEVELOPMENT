<?php
if(isset($_SESSION['session_name'])){
    session_destroy();
    echo "true";
}

?>