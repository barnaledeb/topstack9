<?php include "fact.php";
$i=getIMG();
//print_r($i);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>web</title>
    </head>
    <body>
        welcome <?=$_GET['name'];?>
        <br>
        <?php foreach($i as $a){?>
    <img src="upload/<?=$a['profile']?>" height="200" weidth="200">
    <?php } ?>
        <table border="1px">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>gender</th>
                <th>hobby</th>
                <th>dept</th>
                <th>bio</th>
                <th>action</th>
            </tr>
            
                <?php foreach($data as $u){ ?>
                    <tr>
                    <td> <?php echo $u['id'];?></td>
                    <td><?=$u['name']?></td>
                    <td><?=$u['email']?></td>
                    <td><?=$u['number']?></td>
                    <td><?=$u['gender']?></td>
                    <td><?=$u['hobby']?></td>
                    <td><?=$u['dept']?></td>
                    <td><?=$u['bio']?></td>
                    <td>
                        <form action="fact.php" method="post">
                        <input type="hidden" name="id" value="<?=$u['id'];?>">
                        <input type="submit" name="d" value="delete">
                        <!-- <input type="submit" name="e" value="edit"> -->
                        
                        </form>
                        <a href="edit.php?id=<?php echo $u['id'];?>">edit</a>
                        <!-- $_GET['id'] -->
                            
                    </td>

                </tr>
                <?php }?>
            </table>
    </body>
</html>