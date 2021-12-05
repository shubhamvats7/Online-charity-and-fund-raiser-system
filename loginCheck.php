<?php
require_once 'connect.php';
$flag=0;
if(isset($_POST['username1']))
{
    $flag=1;
    $username = mysqli_real_escape_string($link, $_POST['username1']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $query = "Select * from `users` where u_name= '$username'
                    And u_pass= '$password' ";
    $result = mysqli_query($link, $query);
    $row = mysqli_num_rows($result);

    if($row==0){
        $_SESSION['invalid']="invalid";
        header('Location: login.php');
    }
    else if($row==1){
        $rowuser = mysqli_fetch_assoc($result);
        $_SESSION['user1']=$rowuser['u_name'];
        header('Location: charity.php');
    }
    else
        echo 'Don\'t mess with me';
}
else
{
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $query = "Select * from `username` where u_name= '$username'
                    And u_pass= '$password' ";
    $result = mysqli_query($link, $query);
    $row = mysqli_num_rows($result);

    if($row==0){
        $_SESSION['invalid']="invalid";
        header('Location: index.php');
    }
    else if($row==1){
        $rowuser = mysqli_fetch_assoc($result);
        $_SESSION['user']=$rowuser['u_name'];
        header('Location: admin.php');
    }
    else
        echo 'Don\'t mess with me';
}
?>
