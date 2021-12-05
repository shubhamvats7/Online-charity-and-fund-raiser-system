<?php require_once "connect.php";?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Charity Fund</title>
    <link rel="icon" href="images/fav.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link href="css/admin.css" rel="stylesheet">
    <script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
    </script>
    <style type="text/css">
        .navbar {
  width: 100%;
  background-color: black;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: black;
}

.active {
  background-color: green;
}

@media screen and (max-width: 500px){
  .navbar a {
    float: none;
    display: block;
  }
}
    </style>
</head>

<body>
    <div class="row header container-fluid">
        <div class="col-md-8">
            <a href="index.html"><img src="assets/images/logo-140x140.jpg" alt="Charity Fund"></a>
        </div>
         <div class="col-md-4">
                <?php
               echo "<div class='dropdown profile'>
                   <button style='background-color:red;' class='btn btn-primary dropdown-toggle' type='button'
                                       data-toggle='dropdown'>
                       Hello, <strong>guest</strong>&nbsp;
                     <span class='caret'></span>
                     </button>
                     <ul class='dropdown-menu'>
                       <li><a href='logout.php'>Logout</a></li>
                     </ul>
               </div>";
          ?>
            </div>
    </div>
    <div class="container-fluid row section">
            <div class ="col-md-3 navbar">
                 <ul class="nav nav-pills nav-stacked">
                     <li style="background-color:black" role="presentation"><a href="charity.php">All charities</a></li>
                </ul>
            </div>
        </div>
</body>
</html>
