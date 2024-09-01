<?php
$host = "localhost";
$username = "root";
$password="";
$dbname = "student_management";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn){
   // echo "server running";
}
else{
    echo "not running".mysqli_connect_error();
}

?>