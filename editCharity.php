<?php
require_once "connect.php";
if (isset($_POST['delete'])){
    if( isset($_POST['selected']) ){
        $id=$_POST['selected'];
        foreach ($id as $item){
            $arr=$item;
            print_r($arr);
            $query="delete from charities where id=$arr";
            echo $query;
            $result=mysqli_query($link,$query);
            if (!$result) {
                echo "error";
                die();
                }
           }
        $_SESSION['success']='added';
        header("location: deleteCharity.php");
    }
    else{
        $_SESSION['form']='error';
        header("location: deleteCharity.php");
    }
}
?>
