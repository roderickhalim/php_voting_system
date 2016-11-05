<?php
	require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
</head>
<body>
<?php

	if (isLogin()){
			$nim=$_SESSION['nim'];
			
			$query = $conn -> prepare('Insert into voting(nim,voting2,voting1)values(:nim,null,null)');
			$query->bindParam(':nim', $nim);
			$result = $query->execute();
			header("location:votefemale.php");
			//femalevoteid=voting2
			//malevoteid=voting1
			$nim=$_SESSION['nim'];
			$voting1 = $_GET['malevoteid'];
    		$query1 = $conn->prepare("update voting set voting1=$voting1 where nim=$nim");
    		$result1=$query1->execute();
    		header("location:votefemale.php");
    		//femalevoteid=voting2
			//malevoteid=voting1
		}else{
			echo "";
		}
	// 	if{ // data belum ada
	// 	$query = $conn -> prepare('Insert into voting(nim,femalevoteid,malevoteid)values(:nim,:femalevoteid,:malevoteid)');
	// 	$query->bindParam(':nim', $nim);
	// 	$query->bindParam(':femalevoteid', $femalevoteid);
	// 	$query->bindParam(':malevoteid', $malevoteid);
	// 	$result = $query->execute();
	// 	}
	
	// }		
 //    	if(!isset($_GET['femalevoteid']) && isset($_GET['malevoteid'])){
 //    		echo "data pria berhasil terpilih<br>";
 //    		$malevoteid = $_GET['malevoteid'];
 //    		echo "data pria berhasil terpilih<br>";
 //    		$query1 = $conn->prepare("update voting set malevoteid=$malevoteid where nim=$nim");
 //    		echo "data pria berhasil terpilih<br>";
 //    		$result1=$query1->execute();
 //    		if(! $result)
 //    			die("gagal input votin"); 
 //    		header("location:vote.php");


 //    	}	else if (isset($_GET['femalevoteid']) && !isset($_GET['malevoteid'])) {
 //    		echo "data wanita berhasil terpilih";
 //    		$femalevoteid = $_GET['femalevoteid'];
 //    		echo "data wanita berhasil terpilih<br>";
 //    		$query1 = $conn->prepare("update voting set femalevoteid=$femalevoteid where nim=$nim");
 //    		echo "data wanita berhasil terpilih<br>";
 //    		$result1=$query1->execute();
 //    		if(! $result)
 //    			die("gagal input votin"); 
 //    		header("location:vote.php");
 //    	}else{
 //    		echo "bye bye";
 //    	}

?>
	<script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
</body>
</html>


	