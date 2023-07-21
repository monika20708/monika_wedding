<?php
$servername="localhost";
$username="root";
$password="";
$dbname="wedding";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->error){
    echo "data not connect". mysqli_connect_error();
}
else{
//echo   "connect";
}




?>
