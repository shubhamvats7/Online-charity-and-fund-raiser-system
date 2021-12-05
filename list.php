<?php
  require_once "header.php";
?>
         <div style="margin-left: 60px;" class="col-md-11 content">
          <div>
             <table  id="example" class="table table-striped">
                 <thead>
                   <tr>
                     <th>Name of charity</th>
                     <th>Purpose</th>
                     <th>Founder</th>
                     <th>Cover</th>
                   </tr>
                 </thead>
               </thead>
               <tbody>
              <p id="error">
              </p>
              <?php
                $query="SELECT * FROM `charities`";
                $result=mysqli_query($link, $query);
                      $total = 0;
                      while($row=mysqli_fetch_array($result)){
                       ?>
                               <tr>
                                       <td><?php echo $row['name']?></td>
                                       <td><?php echo $row['purpose']?></td>
                                       <td><?php echo $row['founder']?></td>
                                       <td><?php echo $row['cover']?></td>
                               </tr>
                        <?php
                           }
                        ?>
               </tbody>
               </table>
             </div>
         </div>
     <script>
     $(document).ready(function(){
         $('.navbar ul li.active').removeClass("active");
         $('.navbar ul li:nth-child(3)').addClass("active");
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
