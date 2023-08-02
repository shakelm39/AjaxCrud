<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
    <h2>Ajax Crud operation</h2>
   <form action="">
    <input id="name" type="text" placeholder="Enter Name">
    <input id="email" type="email" placeholder="Enter Email">
    <input id ="pass" type="password" placeholder="Enter Password"><br><br>
    <button class="btn">Insert Data</button><br><br>
    <button class="readbtn">Read Data</button>
   </form>

   <h2>Read Data From Database</h2>
   <table>
    <thead>
        <th>Sl</th>
        <th>Name</th>
        <th>Emal</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody id="tbody">
        
    </tbody>
   </table>
   </div>
   


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>       
<script src="ajax.js"></script>
</body>
</html>