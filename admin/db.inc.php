<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "quiz-php";

$con = mysqli_connect($host, $username, $password, $dbname);

if(!$con){
    echo "Someting Wrong Occurd" or die();
}else{
    // echo "Connected";
}

?>