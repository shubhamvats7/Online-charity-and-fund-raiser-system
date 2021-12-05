<?php
require 'connect.php';
if(isset($_POST['submit']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $query = "insert into users values('$user','$pass','$phno','$email','$address')";
    $result = mysqli_query($link, $query);
    if (!$result) {
        echo "<b>
        common errors while signing up :- </b><br><br>
        1.my be your user name is already taken.<br><br>
        2.registered email or mobile number should not be used again.<br><br>
        3.use less than 200 characters for describing your address.<br><br>
        <a href='signup.php'>Try signing up again</a>
        ";
    die();
    }
    $_SESSION['success']='added';
    header("location: signup.php");
}
?>
