<?php
  require_once "header.php";
 ?>
         <div style="margin-left: 60px;" class="col-md-11 content">
             <div>
             <form class="form-inline" method="post" action="admin.php" >
               <div class="form-group">
                <input type="date" name="sdate" required>
              </div>
              <span> To </span>
              <div class="form-group">
               <input type="date" name="edate" required>
              </div>
              <input type="submit" class="btn btn-primary btn-md" value="Search By Date">
              </input>
             </form>
             <table  id="example" class="table table-striped">
                 <thead>
                   <tr>
                     <th>Doner Name</th>
                     <th>Amount</th>
                     <th>Purpose</th>
                     <th>Address</th>
                     <th>Cell No.</th>
                     <th>Date</th>
                     <th>Payment Status</th>
                     <th>Payment Type</th>
                   </tr>
                 </thead>
               </thead>
               <tbody>
              <p id="error">
              </p>
              <?php
              if( isset($_POST['sdate']) && !empty ($_POST['sdate'])
                  && isset($_POST['edate']) && !empty ($_POST['edate']) ) {
                    $sdate = $_POST['sdate'];
                    $edate = $_POST['edate'];
                    $query = " SELECT * FROM `doner` WHERE doner.d_date BETWEEN
                              '$sdate' AND '$edate' ";
                    $result = mysqli_query($link, $query);
                  }
              else {
                $query="SELECT * FROM `doner`";
                $result=mysqli_query($link, $query);
              }
                      $total = 0;
                      while($row=mysqli_fetch_array($result)){
                        $total += $row['d_amount'];
                       ?>
                               <tr>
                                       <td><?php echo $row['d_name']?></td>
                                       <td><?php echo $row['d_amount']?></td>
                                       <td><?php echo $row['d_purpose']?></td>
                                       <td><?php echo $row['d_addr']?></td>
                                       <td><?php echo $row['d_cell']?></td>
                                       <td><?php echo $row['d_date']?></td>
                                       <td><?php echo $row['d_pay']?></td>
                                       <td><?php echo $row['d_paytype']?></td>
                               </tr>
                           <?php
                           }
                           ?>
               </tbody>
               </table>
               <p>
                 Total Amount = <b><?php echo $total; ?></b> Tk.
               </p>
             </div>
         </div>
     <script>
     $(document).ready(function(){
         $('.navbar ul li.active').removeClass("active");
         $('.navbar ul li:nth-child(1)').addClass("active");
         $("form").submit(function(e){
           $sdate = new  Date( $("input:first").val() );
           $edate = new Date( $("input:odd").val() );
           if($sdate > $edate) {
             e.preventDefault();
             $('p#error').text("Date range is invalid").show().fadeOut(2101);
           }
         });
     });
     </script>
   </body>
</html>
