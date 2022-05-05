<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>

<from action="fact.php" method="post" enctype="multipart/form-data">


    <form action="fact.php" method="post">
        
    
        <label>Name</label>
        Name:<input type="text" name="name" placeholder=" Name" /><br><br>
        
        <label>Email:</label>
       <input type="ema il" name="email" placeholder="Enter your email" /><br><br>
        phone number:<input type="number" name="phone"placeholder="Enter your phone number" /><br><br>
        <label>Gender:</label>
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
     pasword:<input type="password" name="password"  placeholder="password" /><br><br>
        PROFILE:<input type="file" name="profile" value="enter your profile photo">
        <!-- <select>
            <option>MALE</option>
            <option>FEMALE</option>
            <option>Others</option>
        </select><br><br><br> -->
        <input type="submit" name="Register" value="Register">
            </div>
</body>
</html>