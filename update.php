<?php 

$connect  = mysqli_connect("localhost","root","","ajx");

$name = $_GET["name"];
$email = $_GET["email"];
$pass = $_GET["pass"];
$userId = $_GET["userId"];

$sql = "UPDATE ajax SET name='$name',email='$email', pass='$pass' WHERE id='$userId'";
$query = mysqli_query($connect, $sql);

if($query){
    echo "successfully updated data";
}else{
    echo "failed to update";
}


?>