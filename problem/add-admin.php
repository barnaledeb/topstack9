<?php include('bobi/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br>
<from action="" method="POST">
    <table class="tbl-30">
    <tr>
        <td>Full Name: </td>
        <td><input type="text" name="full_name" placeholder="Enter your Name"</td>
    </tr>

    <tr>
        <td>Username: </td>
        <td><input type="text" name="username" placeholder=" Your Userame"</td>
    </tr>

    <tr>
        <td>Passwotrd: </td>
        <td><input type="Password" name="password" placeholder=" your Password"</td>
    </tr>

    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">


        </td>
    </tr>
    </table>

    </form>


    </div>
</div>

<?php include('bobi/footer.php'); ?>
<?php
//process the value from form and save it in database



//check wether the submit button is click or not

if(isset($_POST['submit']))
{
    //button clicked
    // echo "button clicked";
//get the data from form
 $full_name = $_POST['full_name'];
$username = $_POST['username'];
$password = $_POST['password'];

//sql query to save data into database
$sql = "INSERT INTO table_admin SET
    ";
}
// else{
//     //Button not clicked
//     echo "button not clicked";
// }
?>