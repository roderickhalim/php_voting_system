<?php
  require 'connect.php';
?>
<!DOCTYPE html>
<html >
  <head>
   
  <!--mobile responsive-->
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<!--/mobile responsive-->
  <title>UPH Medan Ambassadors 2016</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    
<style type="text/css">
 .wrapper {    
    margin-top: 80px;
    margin-bottom: 20px;
    font-family: Helvetica;
}

.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  background-color: #000;
  border: 3px dotted rgba(0,0,0,0.1);  
  }

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
  color: #D4AF37;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}

input[type="text"] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  color: #D4AF37;
  border :1px solid #D4AF37;
}

input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  color: #D4AF37;
  border :1px solid #D4AF37;
}


.btn-primary , .btn-primary:hover{
    background: #000 ;
    color: #D4AF37;
    border :1px solid #D4AF37;
}

body{
    background: #000;
    width: 100%;
}


a:link{
  text-decoration: none;
  color: #D4AF37;
}

a, a:hover{
  color : #D4AF37;
}
  </style>
        <script src="js/prefixfree.min.js"></script>
  </head>
  <body> 

 <div class = "container">
    <div class="wrapper">
        <form action="submit_login.php" method="post" name="Login_Form" class="form-signin">   
              <input type="text" class="form-control" name="nim" placeholder="NIM" autofocus="" maxlength="11" />
              <input type="password" class="form-control" name="password" placeholder="DD-MM-YYYY" maxlength="8" /> 
        <?php
        if(isLogin()){
            echo "Hello, ".$_SESSION['nim'];
            echo "<button class='btn btn-lg btn-primary btn-block'  name='logout' value='Logout'><a href='logout.php'>LOGOUT</a></button>";
          }else{
            echo "<button class='btn btn-lg btn-primary btn-block'  name='login' value='Login' type='Submit'>LOGIN</button>";
          }
        ?> 
        <br><br><br>
        <h6 align="center">POWERED BY <small class="text-muted"> HMJ SI UPH MEDAN </small></h6>
        </form>         
    </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
  
  </body>
</html>
