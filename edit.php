<?php 

$connect  = mysqli_connect("localhost","root","","ajx");
$userid = $_GET['userId'];

$edit = "SELECT * FROM ajax WHERE id = '$userid'";

$query = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
    <h2>Edit Page</h2>
   <form action="">
    <input id="name" type="text" placeholder="Enter Name" value="<?php echo $row['name'] ?>">
    <input id="email" type="email" placeholder="Enter Email" value="<?php echo $row['email'] ?>">
    <input id ="pass" type="text" placeholder="Enter Password" value="<?php echo $row['pass'] ?>"><br><br>
    <button class="updateBtn" onclick="Update(<?php echo $row['id'] ?>)">Update</button><br><br>
   
   </form>
   </div>
   


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>       
<script src="ajax.js"></script>
</body>
</html>