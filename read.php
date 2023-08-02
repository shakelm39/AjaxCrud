<?php

$connect  = mysqli_connect("localhost","root","", "ajx");

$sql = "SELECT * FROM ajax";

$query = mysqli_query($connect,$sql);
$sln = 1;
while($row = mysqli_fetch_assoc($query)){?>

<tr>
    <td><?php echo $sln;?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['pass'];?></td>
    <td><button onclick="Edit(<?php echo $row['id'] ?>)">Edit</button></td>
    <td><button onclick="Delete(<?php echo $row['id'] ?>)">Delete</button></td>
</tr>

<?php
    $sln++;

    }
?>