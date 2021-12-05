<?php
require_once "connect.php";

$target_dir = "chars/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$cover=$target_file;
$founder=$_POST['founder'];
$name=$_POST['c_name'];
$purpose=$_POST['c_purpose'];
$id=NULL;
$query="insert into raise(`founder`,`name`,`purpose`,`cover`,`id`) values('$founder','$name','$purpose','$cover','$id')";
if($_POST['submit']=="add")
{
  $query="INSERT INTO `charities`(`id`, `name`, `purpose`, `founder`, `cover`) VALUES ('$id','$name','$purpose','$founder','$cover')";
  $result=mysqli_query($link,$query);
  if (!$result) {
    echo "error";
    die();
  }
  $_SESSION['success']='added';
  header("location: addCharity.php");
}
else
{
  $result=mysqli_query($link,$query);
  if (!$result) {
    echo "Charity name is already taken try using another name";
    die();
  }
  $_SESSION['success']='added';
  header("location: raisefund.php");
}
?>
