<?php
require_once "nologinheader1.php";
if(isset($_POST['char']))
{
  $charity=$_POST['char'];
  $query = "select * from charities where id='$charity'";
  $result = mysqli_query($link, $query);
  $row=mysqli_fetch_assoc($result);
  $name=$_SESSION['user1'];
}
else
{
  echo "<meta http-equiv='refresh' content='3;url=charity.php'>";
}
?>
<head>
    <style>
    html,body {
  background-color: RGB(52, 73, 94);
}
</style>
    <script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
    </script>
</head>
<body>

<div style="margin-left: 60px;" class="col-md-11 content">
           <?php
           if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
             echo "<p style='color:green;'>
              Successfully added ".$_SESSION['success']."'s payment info<br><span style='color:red'>If you have selected pay now option you can go to your payments page and check.</span></p>";
              unset($_SESSION['success']);
           }

           $x=$_POST['char'];
           $arr=explode(",",$x);
           $founder=$arr[0];
           $purpose=$arr[1];
            ?>

           <form class="form-horizontal reg-form" action="donerCheck.php" method="post">
                 <div class="form-group form-group-md">
                   <label class="col-md-2 control-label">Doner Name</label>
                       <div class="col-sm-6">
                         <input class="form-control" type="text" required
                                placeholder="Doner Name" name="d_name">
                       </div>
                 </div>
               <div class="form-group form-group-md">
                 <label class="col-md-2 control-label">Amount</label>
                 <div class="col-md-6">
                  <input class="form-control" type="number" required
                    placeholder="Amount Here" name="d_amount">
                  </div>
               </div>
              <div class="form-group form-group-md">
                <label class="col-md-2 control-label">Purpose</label>
                  <div class="col-md-6">
                    <input class="form-control" type="text" required
                      placeholder="Purpose of donation" value="<?php echo $purpose;?>" name="d_purpose" readonly>
                  </div>
              </div>
              <div class="form-group form-group-md">
                    <label class="col-md-2 control-label">Address</label>
                    <div class="col-md-6">
                     <input class="form-control" type="text" required
                            placeholder="Address Here" maxlength="50" name="d_address">
                   </div>
              </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Contact Number</label>
                       <div class="col-md-6">
                         <input class="form-control" type="text" required
                                placeholder="ex : 01xxxxxxxxx" name="d_cell">
                       </div>
                 </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Payment</label>

                       <div class="col-md-6 form-group-md">
                             <select  name="d_pay"  required>
                                  <option value="">Payment</option>
                                  <option value='Paid' >Pay Now</option>
                                  <option value='Unpaid'>Pay afterwards</option>
                             </select>
                       </div>
                 </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Payment Type</label>

                       <div class="col-md-6 form-group-md">
                             <select  name="d_paytype" required>
                                  <option value="">Payment Type</option>
                                  <option value='Cash' >Cash</option>
                                  <option value='Cheque' >Cheque</option>
                                  <option value='bKash' >bKash</option>
                                  <option value='Other' >Other</option>
                             </select>
                       </div>
                 </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Paying to</label>
                       <div class="col-md-6">
                         <input class="form-control" type="text" value="<?php echo $founder?>" name="founder" readonly>
                       </div>
                 </div>
                <div class="form-group">
                       <div class="col-sm-offset-2 col-md-10">
                         <button type="submit" name="but" value="set" class="btn btn-default">Add my payment</button>
                       </div>
                 </div>
           </form>
         </div>
     </div>


     <script>
     $(document).ready(function(){
         $('.navbar ul li.active').removeClass("active");
         $('.navbar ul li:nth-child(1)').addClass("active");
     });
     </script>
     </script>
   </body>
</html>
