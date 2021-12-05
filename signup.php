<?php require_once "connect.php";?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Charity Fund</title>
    <link rel="icon" href="images/fav.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <style type="text/css">
      html,body
      {
        background-color: black;
        animation: mymove 15s infinite;
      }
      @keyframes mymove {
        0% {background-color: black;}
        25%{background-color: #1f3057;}
        50%{background-color: #757639;}
        75%{background-color: #3b3629;}
        100% {background-color: #676f76;}
      }
    </style>
</head>

<body>
  <div class="container" style="margin-top: 5%;">
    <a href="index.html"><img src="assets/images/logo-140x140.jpg" alt="Charity Fund"></a>
    <?php
    if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
      echo "<p style='color:green; text-align:center; font-size:17px;'>
       account created successfully</p>";
       unset($_SESSION['success']);
    }
     ?>
      <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
              <div class="panel-heading">Sign up</div>
              <div class="panel-body">
              <form role="form" method="post" action="signupCheck.php" onsubmit="return matchpassword()">
                  <div class="row">
                      <div class="form-group col-xs-12">
                      <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Username:</label>
                          <div class="input-group">
                              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required/>
                              <span class="input-group-btn">
                                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-xs-12">
                          <label for="password"><span class="text-danger" style="margin-right:5px;">*</span>Password:</label>
                          <div class="input-group">
                              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
                              <span class="input-group-btn">
                                  <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-xs-12">
                      <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Confirm</label>
                          <div class="input-group">
                              <input class="form-control" id="password1" type="password" name="password1" placeholder="Confirm password" required/>
                              <span class="input-group-btn">
                                  <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-xs-12">
                      <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Mobile number</label>
                          <div class="input-group">
                              <input class="form-control" id="phno" type="text" name="phno" placeholder="Enter your mobile number" required/>
                              <span class="input-group-btn">
                                  <label class="btn btn-primary"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></label>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-xs-12">
                      <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Email</label>
                          <div class="input-group">
                              <input class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" type="text" name="email" placeholder="Enter your email address" required/>
                              <span class="input-group-btn">
                                  <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-xs-12">
                      <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Address</label>
                          <div class="input-group">
                              <input class="form-control" id="address" type="text" name="address" placeholder="where u located?" required/>
                              <span class="input-group-btn">
                                  <label class="btn btn-primary"><span class="glyphicon glyphicon-road" aria-hidden="true"></label>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-xs-4">
                          <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-xs-10">
                          <a href="index.php">Admin?Click here..</a><br>
                          <a href="login.php">Already have an account?Click here..</a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</body>

</html>
<script type="text/javascript">
function matchpassword()
{
  var firstpassword=document.forms[0].querySelector('input[name="password"]').value;
  var secondpassword=document.forms[0].querySelector('input[name="password2"]').value;
  if(firstpassword==secondpassword)
  {
    return true;
  }
  else
  {alert('PASSWORD and CONFIRMPASSWORD must match');
    return false;

  }
}
</script>
