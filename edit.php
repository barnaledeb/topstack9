<?php
include'dao.php';
$id=$_GET['id'];
$u=getuser($id);
//print_r($u);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fact.php" method="post">
    <!-- <input type="text" name="name" -->
    Name:<input type="text" name="name" value="<?=$u['name']?>" placeholder=" Name" /><br><br>
    email:<input type="email" name="email" value="<?=$u['email']?>" placeholder="Enter your email" /><br><br>
        <!-- <input type -->
    phone number:<input type="number" name="phone" value="<?=$u['number']?>" placeholder="Enter your phone number" /><br><br>
        Male:<input type="radio" name="gender" value="male"/>
        Female:<input type="radio" name="gender" value="female"/>
        Other:<input type="radio" name="gender" value="other"/><br><br>
        <label>Hobby:</label>
        Cricket:<input type="checkbox" name="hobby[]" value="cricket"/>
        Drawing:<input type="checkbox" name="hobby[]" value="Drawing"/>
        Reading Book:<input type="checkbox" name="hobby[]" value="Reading book"/><br><br>
        Department:
        <select name="dept">
        <option selected disabled>Choose Option</option>
        <option value="CST">CST</option>
        <option value="ME">ME</option>
        <option value="ECE">ECE</option>
    </select><br><br>
        <label>Text area</label>
        <!-- <inut type="text area" placeholder="leave comments"></inut> -->
     Bio:<textarea name="bio" placeholder="text area"></textarea><br><br>

     <input type="text" name="id" value="<?=$id?>">
     <input type="submit" name="update" value="Register">

</body>
</html>