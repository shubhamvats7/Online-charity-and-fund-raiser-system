<?php
  require_once "header.php";
 ?>
         <div style="margin-left: 60px;" class="col-md-11 content">
           <?php
           if(isset($_SESSION['form']) && !empty($_SESSION['form'])){
             echo "<p style='color:red;'>
              Please check and then click.</p>";
              unset($_SESSION['form']);
           }
           else if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
             echo "<p style='color:green;'>
              Successfully made paid.</p>";
              unset($_SESSION['success']);
           }
            ?>
             <div>
             <form class="form-inline" method="post" action="makePaid.php" >
             <table  id="example" class="table table-striped">
                 <thead>
                   <tr>
                    <th></th>
                     <th>Founder</th>
                     <th>Name of charity</th>
                     <th>Purpose</th>
                     <th>Src</th>
                   </tr>
                 </thead>
               </thead>
               <tbody>
                       <?php
                           $query="select * from raise";
                           $result=mysqli_query($link, $query);
                           while($row=mysqli_fetch_array($result))
                           {

                            $required=$row['name'].','.$row['purpose'].','.$row['founder'].','.$row['cover'].','.$row['id'];
                            ?>
                               <tr>
                                      <td>
                                        <input type="checkbox" name="selected[]"
                                          value=<?php echo $required?> />
                                      </td>
                                       <td><?php echo $row['founder']?></td>
                                       <td><?php echo $row['name']?></td>
                                       <td><?php echo $row['purpose']?></td>
                                       <td><?php echo $row['cover']?></td>
                               </tr>
                           <?php
                           }
                           ?>
               </tbody>
               </table>
               <input type="submit" class="btn btn-primary btn-md"
                      value="Accept" name="makePaid">
             </form>
             </div>
         </div>
     </div>
     <script>
     $(document).ready(function(){
         $('.navbar ul li.active').removeClass("active");
         $('.navbar ul li:nth-child(2)').addClass("active");
     });
     </script>
   </body>
</html>
