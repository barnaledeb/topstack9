<?php   
include 'db.php';
//function adduser($name,$email){
function adduser($users){ //$users=$user=array
        $un=$users['name'];
        $ue=$users['email'];
        $up=$users['phone'];
        $ug=$users['gender'];
        $uh=$users['hobby'];
        $ud=$users['depart'];
        $ub=$users['bio'];
           
        $con=$GLOBALS['con'];
        $sql="insert into users values(null,?,?,?,?,?,?,?)";
        //$sql="insert into users values(null,?,?)";
        $st=$con->prepare($sql);
        $st->bind_param("sssssss",$un,$ue,$up,$ug,$uh,$ud,$ub);
        // $user= array("name")
        if($st->execute())
        {
            return 1;
        }
        else{
            return 0;
        }
}
function getusers()
{
    $con=$GLOBALS['con']; 
    $sql="select* from users";
    $result=$con->query($sql);
    $getData=array();
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
          $getData[]=$row;
      }  
    }
    // echo"<pre>";
    // echo print_r($getData);
    // echo"</pre>";
    return $getData;
}
function deleteuser($id)
{
    $con=$GLOBALS['con'];
    $sql="delete from users where id=? ";
    //$sql="insert into users values(null,?,?)";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    // $user= array("name")
    if($st->execute())
    {
        return 1;
      
    }
    else{
     return 0; 
       
    }
}
function getuser($id)
{
$con=$GLOBALS['con']; 
    $sql="select* from users where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
    $res=$st->get_result();
        if($res->num_rows>0){
if($y=$res->fetch_assoc()){
    return $y;
}
        }
    }}

function edituser($user)
    {
        $con=$GLOBALS['con']; 
        $name=$user['name'];
        //echo $name;
        $id=$user['id'];
        $sql="update users set name=? where id=?";
        $st=$con->prepare($sql);
    $st->bind_param("si",$name,$id);
    if($st->execute())
    {
    $res=$st->get_result();
       if($res->num_rows >0){
        if($y=$res->fetch_assoc()){
            return $y;
            //print_r($res);
        }
        }
            }
            else{
                echo $con->error;
            }
        }


//for login
function login($u){
    $con=$GLOBALS['con']; 
    $n=$u['n'];
    $e=$u['e'];  
    $sql="select name,email from users where name=? and email=?";  
    $st=$con->prepare($sql);
    $st->bind_param("ss",$n,$e);
    if($st->execute())
    {
    $res=$st->get_result();
        if($res->num_rows>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
    //   while($row=$result->fetch_assoc()){
        //   $getData[]=$row;
  function uploadFile($name){
    $con=$GLOBALS['con'];
    $sql="insert into profile values(null,?)";
    //$sql="insert into users values(null,?,?)";
    $st=$con->prepare($sql);
    $st->bind_param("s",$name);
    // $user= array("name")
    if($st->execute())
    {
        return 1;
        
    }
    else{
        return 0;
        
    }  
}

// function getFiles()
// {
// $con=$GLOBALS['con']; 
//     $sql="select* from users";
//     $st=$con->prepare($sql);
//     $st->bind_param("i",$id);
//     if($st->execute())
//     {
//     $res=$st->get_result();
//         if($res->num_rows>0){
// if($y=$res->fetch_assoc()){
//     return $y;
// }
//         }
//     }}

function getfiles()
{
    $con=$GLOBALS['con']; 
    $sql="select* from profile";
    $result=$con->query($sql);
    $getData=array();
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
          $getData[]=$row;
      }  
    }
    // echo"<pre>";
    // echo print_r($getData);
    // echo"</pre>";
    return $getData;
}
?>