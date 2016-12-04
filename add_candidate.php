<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<title>Add User</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

          <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

          <link rel="stylesheet" href="assets/css/normalize.css">

<style type="text/css">
    .space{
            width: 100%;
            height:30px;
            float: left;
        }
    .logo{
            margin: auto;
            height: 260px;
            width: 100%;
            float: left;
            background-position: fixed;
        }

    body{
        background:black;
        min-height: 500px;
    padding-top: 70px;
    }
    .img-center {margin:0 auto;}
    .button{
        margin-left:43%;
        float: left;
    }
    .atur{
        float: left;
    }

  .wrapper {    
    font-family: Helvetica;
    }


.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
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

input[type="text"] ,input[type="password"] ,input[type="email"]{
  margin-bottom: 0px;
  color: #D4AF37;
  border :1px solid #D4AF37;
}

.btn-primary , .btn-primary:hover{
    background: #000 ;
    color: #D4AF37;
    border :1px solid #D4AF37;
    margin-top: 20px;
}

body{
    background: radial-gradient(circle, #202020,#000000);
    background-size:cover;
    width: 100%;
}


a:link{
  text-decoration: none;
  color: #D4AF37;
}

a, a:hover{
  color : #D4AF37;
}

.footer{
  margin-top: -10px;
}


*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    color: #D4AF37;
}

*[role="form"] h2 {
    margin: 0 0 20px 0;
    text-align: center;
    font-family: "Trajan Pro";
  font-size: 24px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  color: #fff;
}


@media (min-width: 1200px) {
}

@media (min-width: 992px) and (max-width: 1199px) {
}

@media (min-width: 768px) and (max-width: 991px) {
}

@media (max-width: 479px) {
  .logo{
            margin: auto;
            height: 200px;
            width: 100%;
            float: left;
            background-position: fixed;
  }
}
</style>
</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="admin.php">Admin Page</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
</nav>

<div class="container-fluid">
        <div class="logo text-center">
            <img src="image/banner.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>

        <div class="container">
            <form class="form-horizontal" role="form" action="candidate_data.php" method="post" name="Login_Form" enctype="multipart/form-data">
                <h2>Add User</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Nomor</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nomor" placeholder="Nomor" autofocus="" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" placeholder="Full Name" class="form-control" autofocus />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>

<!--                 <div id="dialog-confirm" title="Are you sure?">
                  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Are you sure the data is correct??</p>
                </div> -->

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block" name="add">Add User</button>
                    </div>
                </div>

                <?php
                  if (isset($_SESSION["message"]) && strlen($_SESSION["message"]) != 0) {
                      echo "<p class='text-center' style='color:#FF0000'>".$_SESSION['message']."</p>";
                    }
                ?>
            </form> <!-- /form -->
        </div> <!-- ./container -->

        <div class="footer text-center">
            <img src="image/footer.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>
</div>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

          <script src="js/prefixfree.min.js"></script>

          <script src="js/jquery-3.1.1.min.js" charset="UTF-8"></script>
          
          <script src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

 <!--          <script type="text/javascript" src="js/confirmation.js"></script> -->

          <script type="text/javascript">
            $('.form_date').datetimepicker({
              language:  'en',
              weekStart: 1,
              todayBtn:  1,
              autoclose: 1,
              todayHighlight: 1,
              startView: 2,
              minView: 2,
              forceParse: 0
              });
              </script>
</body>
</html>                                     