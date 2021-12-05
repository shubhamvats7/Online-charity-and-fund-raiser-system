<?php
  require_once "header1.php";
 ?>
<head>
    <style>
        .card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 40%;
        }

        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
          padding: 2px 16px;
        }
            html,body {
          background-color: RGB(52, 73, 94);
        }
    </style>
</head>
<div style="margin-left: 60px;" class="col-md-11 content">
<?php
$query = " SELECT * FROM charities";
$result = mysqli_query($link, $query);
while($row=mysqli_fetch_array($result)){
?>
    <div class="card" style="float: left;width: 31.1%;height: auto; margin: 15px;">
    <form class="form-inline" method="post" action="donate.php" >
              <img src=<?php echo $row['cover']?> alt="Sorry,image not available" style="width:100%">
              <div style="padding: 30px;">
                <h3><b><?php echo $row['name']?></b></h3><br>
                <p style="width: 100%;">Purpose : <?php echo $row['purpose']?></p>
                <p style="width: 100%;">Founder : <?php echo $row['founder']?></p>
              </div>
              <?php
              $x=$row['founder'].','.$row['purpose'];
              ?>
        <button style="margin-left: 45%;margin-bottom: 5%;" type="submit" class="btn btn-primary btn-md"
                  value=<?php echo $x?> name="char">
                  Donate
        </button>
    </form>
    </div>
<?php
}
?>
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
