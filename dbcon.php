<?php
$server="localhost";
$username="user";
$password="1234";
$database="user";

$conn=mysqli_connect($server,$username,$passward,$database);
if($conn){
    echo "success";
}
else{
    die("error".mysqli_connect_error());
}

?>