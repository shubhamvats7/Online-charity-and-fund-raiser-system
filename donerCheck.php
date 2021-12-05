<?php
require_once "connect.php";;

    if(isset($_POST['but'])) {
        $d_name = mysqli_real_escape_string($link, $_POST['d_name']);
        $d_amount = mysqli_real_escape_string($link, $_POST['d_amount']);
        $d_purpose = mysqli_real_escape_string($link, $_POST['d_purpose']);
        $d_date = date("Y-m-d");
        $d_address = mysqli_real_escape_string($link, $_POST['d_address']);
        $d_cell = mysqli_real_escape_string($link, $_POST['d_cell']);
        $d_pay = mysqli_real_escape_string($link, $_POST['d_pay']);
        $d_paytype = mysqli_real_escape_string($link, $_POST['d_paytype']);
        $founder = $_POST['founder'];

        $query =" INSERT INTO `doner` (`d_id`, `d_name`, `d_amount`, `d_purpose`,
            `d_date`, `d_addr`, `d_cell`, `d_pay`, `d_paytype`,`founder`) VALUES (NULL,
            '$d_name', '$d_amount', '$d_purpose', '$d_date', '$d_address', '$d_cell',
            '$d_pay', '$d_paytype','$founder') ";
        $result = mysqli_query($link, $query);
        echo($query);
        $_SESSION['success'] = $d_name;
        header('Location: donate.php');
      }
else{
    echo 'error';
    $_SESSION['form']='e';
    header('Location: donate.php');
}
?>
