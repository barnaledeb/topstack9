<?php 
include'dao.php';

if(isset($_POST['Register'])){
$n=$_POST["name"];
$e=$_POST["email"];
$p=$_POST["phone"];
$g=$_POST["gender"];
$h=$_POST["hobby"];
$d=$_POST["dept"];
$b=$_POST["bio"];
$str=implode(",",$h);
// echo $n."<br>";
// echo $e."<br>";
// echo $p."<br>";
// echo $g."<br>";
// echo $h."<br>";
// echo $d."<br>";
//echo $str;
$user=array('name'=>$n,'email'=>$e,'phone'=>$p,'gender'=>$g,'hobby'=>$str,'depart'=>$d,'bio'=>$b); //create associative array 
if(adduser($user))
{
    
    header("Location:welcome.php?name=".$n);
}
else
{
    header("location:form1.php");   
}
}
 if(isset($_POST['update'])){
    $n=$_POST["name"];
    $e=$_POST["email"];
    $p=$_POST["phone"];
    $g=$_POST["gender"];
    $h=$_POST["hobby"];
    $d=$_POST["dept"];
    $b=$_POST["bio"];
    $id=$_POST['id'];
    $str=implode(",",$h);
    // echo $n."<br>";
    // echo $e."<br>";
    // echo $p."<br>";
    // echo $g."<br>";
    // echo $h."<br>";
    // echo $d."<br>";
    //echo $str;
    $user=array('id'=>$id,'name'=>$n,'email'=>$e,'phone'=>$p,'gender'=>$g,'hobby'=>$str,'depart'=>$d,'bio'=>$b); //create associative array 
    if(edituser($user))
    {
        
        header("Location:welcome.php?name=".$n);
    }
    else
    {
        //header("location:edit.php");   
    }
 }

$data=getusers();


if(isset($_POST['d'])){
    $id=$_POST['id'];
    if(deleteuser($id))
    {
        header("Location:welcome.php");
    }
}

//for login 
if(isset($_POST['log']))
{
$n=$_POST['name'];
$p=$_POST['email'];
$user=array('n'=>$n,'e'=>$p);
if(login($user))
{
    header("Location:welcome.php");
}
else{
    header("Location:login.php");
}
}


// for profile upload

if(isset($_POST['upload']) && $_FILES['profile'])

{
    // echo"<pre";
    // print_r$_FILES['profile'];
    // $name
    $file=$_FILES['profile'];
    $name=$file['name'];
    $type=$file['type'];
    $size=$file['size'];
    $error=$file['error'];
    $tmp=$file['tmp_name'];
    if($error==0)
    {
        if($size=1250000)
        {
            $ext=pathinfo($name,PATHINFO_EXTENSION);
            $ext_l=strtolower($ext);
            $n_name=uniqid("IMG-",true).".".$ext_l;
            if(uploadFile($n_name))
            {
                if(move_uploaded_file($tmp,"upload/".$n_name))
                {
                    header("Location:welcome.php");
                }
                else
                {
                   // header("Location:upload.html");
                }

            }
        }
        else{
            echo "it is exist  maximum size";
        }
    }  
    else{
        echo "something went wrong";
    
    }
}

function getIMG(){
    $f=getfiles();
    return $f;
}
// function getIMG

?>