<?php
require_once "connect.php";
if (isset($_POST['makePaid'])){
    if( isset($_POST['selected']) ){
        $id=$_POST['selected'];
        foreach ($id as $item){
            $arr=explode(",",$item);
            print_r($arr);
            $query="insert into charities(`name`, `purpose`,`founder` , `cover`) values('$arr[0]','$arr[1]','$arr[2]','$arr[3]')";
            $query1="delete from raise where id=$arr[4]";
            $result=mysqli_query($link,$query);
            $result1=mysqli_query($link,$query1);
            if (!$result || !$result1) {
                echo "error";
                die();
                }
           }
        $_SESSION['success']='added';
        header("location: doner.php");
    }
    else{
        $_SESSION['form']='error';
        header("location: doner.php");
    }
}
?>
