<?php

$connect  = mysqli_connect("localhost","root","","ajx");
$userId = $_POST['userId'];

$delete ="DELETE FROM ajax WHERE id =$userId";

$query = mysqli_query($connect,$delete);

if($query){
    echo "Data deleted successfully";
}else{
    echo "Data not deleted successfully";
}

?>