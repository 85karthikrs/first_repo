<?php 
$dbserver="localhost";
$dbuser="root";
$dbpass="root";
$dbname="sample";

$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

if(isset($conn)){
   // echo "Database connected";
}else{
    echo "not connected";
}

?>