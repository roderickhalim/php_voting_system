<?php
require_once 'connect.php';
$id = $_GET["id"];
?>


	
<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' href='image/icon.ico' type='image/x-icon' />
	<title>Result</title>
	<style>
	img{
		max-height: 200px;
		max-width: 200px;
		height: auto;
		width: auto;
	}
	h1{
		text-align:left;
		font-size:80px;
		color:white;
		margin-left:750px;
		margin-top:-350px;
		width:500px;
	}
	h2{
		margin-top:50px;
		text-align:center;
		color:#F4EF84;
		font-size:30px;
		opacity:0;
		transition:3s;
	
	}
	body{
		background-color:black;
		font-family:Trajan Pro;
	}
	.wrapper{
		margin:auto;
		height:500px;
		position:relative;
		width: 1125px;
	}
	.winner{
		width:1150px;
		opacity:0;
		transition:3s;
	}
	
	</style>
</head>
<body>
	<center>
		<div class="logo">
			<img src="image/login-01.png" style="margin:auto;margin-top:20px;max-height:500px;max-width:500px">
		</div>
		<div class="header">
			<img src="image/png-02.png" style="margin:auto;margin-top:20px;max-height:500px;max-width:1000px">
		</div>
</center>

	<div class="wrapper">
		<img src="image/final/<?php echo $id; ?>.png" style="min-height:600px;min-width:530px;margin-top:150px;margin-left:-100px">
	<?php

		$image ="image/number/$id.png";
 
		if($id == 1)
			$name="Salvian Kumara";
		else if($id == 2)
			$name="Lora";
		else if($id == 3)
			$name="Naomi Ginting";
		else if($id == 4)
			$name="Corina Sudjono";
		else if($id == 5)
			$name="Derian Ottoman";
		else if($id == 6)
			$name="Stevan Angestu";
		else if($id == 7)
			$name="Angellyne Chanlie";
		else if($id == 8)
			$name="Jackline";
		else if($id == 9)
			$name="Angelia Chairiana";
		else if($id == 10)
			$name="Tifanny Simon";
		else if($id == 11)
			$name="Denny";
		else if($id == 12)
			$name="Diky Tanhari";
		else if($id == 13)
			$name="Duangkamon";
		else if($id == 14)
			$name="Tiffany";
		else if($id == 15)
			$name="Kevin";
		else if($id == 16)
			$name="Wilbert Lauren";
		else if($id == 17)
			$name="Faustine";
		else if($id == 18)
			$name="George Lie";
		else if($id == 19)
			$name="Surya Anthony";
		else if($id == 20)
			$name="Aris Mismoyo";
		echo"<img src='$image' style='margin-bottom:200px;margin-left:50px;max-height:200px;max-width:200px'><h1>$name</h1>";
	?>
		
	</div>
	</body>
</html>