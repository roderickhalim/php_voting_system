<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<title>test voting</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

          <script src="js/prefixfree.min.js"></script>

          <script src="js/prefixfree.min.js"></script>

          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

          <link rel="stylesheet" href="assets/css/normalize.css">

          <script src="js/confirmationvote.js"></script>

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



.btn-primary , .btn-primary:hover{
    background: #000 ;
    color: #D4AF37;
    border :1px solid #D4AF37;
}

body{
   background: black;
}


a:link{
  text-decoration: none;
  color: #D4AF37;
}

a, a:hover{
  color : #D4AF37;
}

.footer{
  margin-top: -50px;
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

.MaleBut,.FemaleBut {
    width: 50%;

    padding-left: 1%;
    padding-right: 1%;
    padding-top: 4%;
    float: left;
    background-size: 100% auto;
}
.candidate{
    width:100%;
    height: 175px;
    margin-top: 2%;
    margin-bottom: 2%;
    float: left;

}

</style>
</head>
<body>

<div class="container-fluid">
        <div class="logo text-center">
            <img src="image/banner.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="300px"> 
        </div>
       <form method="get" action="process.php">
            <div class="FemaleBut">
                <button class='btn btn-lg btn-primary btn-block'  name='gender' value='female'><a href='test.php?gender="female"' style="font-size:16px;">MALE</a></button>
            </div>
            <div class="MaleBut">
                <button class='btn btn-lg btn-primary btn-block'  name='gender' value='male'><a href='test.php?gender="male"' style="font-size:16px;">FEMALE</a></button>
            </div>

            <div id="dialog-confirm" title="Are you sure?">
                <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Do you want to vote this candidate?</p>
              </div>


            <?php
            if(isset($_GET['gender'])=='male'){

                $maleName= array('steven','agu','test');
                $maleImage= array('image/account.png','image/account.png','image/account.png');
                $resultName= count($maleName);
                $resultImage=count($maleImage);


              for($i=0;$i<$resultName;$i++){
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$maleImage[$i]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo" <label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$maleName[$i]."</a></label>";
                echo"<button class='btn btn-lg btn-primary btn-sm btn-block' name='vote' value='vote' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
            }
          }else{
              $maleName= array('steven','agu','test');
                $maleImage= array('image/account.png','image/account.png','image/account.png');
                $resultName= count($maleName);
                $resultImage=count($maleImage);
              for($i=0;$i<$resultName;$i++){
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$maleImage[$i]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo" <label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$maleName[$i]."</a></label>";
                echo"<button class='btn btn-lg btn-primary btn-sm btn-block' name='vote' value='vote' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
              }

          }
          ?>            
        </form>
        <div class="footer text-center">
            <img src="image/footer.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>
</div>
</body>
</html>                                     