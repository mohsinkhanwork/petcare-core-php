<?php   

$con = mysqli_connect("localhost","root","","petcare2");
@ob_start();
session_start();

if(!$con){
    echo "connection failed";
} else {

    // echo "conection done";
}


?>