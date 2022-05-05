<?php
include'db.php';
if(isset($_POST['submit'])){
    $name=$_POST['email'];
    echo $name." ".$email;
    $sql="insert into users values(null,?,?)";
    $st=$con->prepare("$sql")
    $st->bind_param("ss",$name,$email);
    if($st->execute()){
        echo"success";
    }
    else{
        echo $con->error;
    }
}
?>