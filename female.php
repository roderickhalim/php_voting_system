<?php
// require_once "db.php";
// $conn = konek_db();
require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' href='image/icon.ico' type='image/x-icon' />
	<title>Result : Female</title>
	<style>
	h1{
		opacity:0;
		transition: 3s;
	}
	.wrapper img{
		height:auto;
		width:auto;
		max-height: 100px;
		max-width: 100px;
		margin-left:-15px;
		margin-top:200px;
	}
	body{
		background-color:black;
		font-family:Trajan Pro;
	}
	a{
		transition:1s;
		color:white;
		letter-spacing:2px;
		text-decoration:none;
		font-size:20px;
	}
	a:hover{
		color:#F4EF84;
	}
	.wrapper{
		margin:auto;
		position:relative;
		width: 1125px;
	}
	.rectangle1{
		position:absolute;
		bottom:0;
		width:30px;
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartone 8s ease forwards;
		margin-left:20px;

	<?php
		$query = $conn->prepare("select * from voting where voting2= '2'");
		$query->execute();
		$count = $query->rowCount();
		$x[1] = $count;
		?>	
	}

	@keyframes chartone{
		from{height:0px;}
		to{height:
			<?php	echo 20+($x[1]*0.5);?>px;}
	}

	.rectangle2{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: charttwo 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select * from voting where voting2= '3'");
		$query->execute();
		$count = $query->rowCount();
		$x[2] = $count;
		?>	
	}

	
	@keyframes charttwo{
		from{height:0px;}
		to{height:
			<?php	echo 20+($x[2]*0.5);?>px;}
	}

	.rectangle3{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartthree 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select *  from voting where voting2= '4'");
		$query->execute();
		$count = $query->rowCount();
		$x[3] = $count;
		?>	
	}

	@keyframes chartthree{
		from{height:0px;}
		to{height:<?php	echo 20+($x[3]*0.5);?>px;}
	}

	.rectangle4{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartfour 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select * from voting where voting2= '7'");
		$query->execute();
		$count = $query->rowCount();
		$x[4] = $count;
		?>	
	}
	@keyframes chartfour{
		from{height:0px;}
		to{height:<?php	echo 20+($x[4]*0.5);?>px;}
	}

	.rectangle5{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartfive 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select * from voting where voting2= '8'");
$query->execute();
		$count = $query->rowCount();
		$x[5] = $count;
		?>	
	}
	@keyframes chartfive{
		from{height:0px;}
		to{height:<?php	echo 20+($x[5]*0.5);?>px;}	}

	.rectangle6{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartsix 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select *  from voting where voting2= '9'");
$query->execute();
		$count = $query->rowCount();
		$x[6] = $count;
		?>	
	}
	@keyframes chartsix{
		from{height:0px;}
		to{height:<?php	echo 20+($x[6]*0.5);?>px;}
	}

	.rectangle7{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartseven 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select * from voting where voting2= '10'");
		$query->execute();
		$count = $query->rowCount();
		$x[7] = $count;
		?>	
	}
	@keyframes chartseven{
		from{height:0px;}
		to{height:<?php	echo 20+($x[7]*0.5);?>px;}
	}

	.rectangle8{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: charteight 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select * from voting where voting2= '13'");
$query->execute();
		$count = $query->rowCount();
		$x[8] = $count;
		?>	
	}
	@keyframes charteight{
		from{height:0px;}
		to{height:<?php	echo 20+($x[8]*0.5);?>px;}
	}
	.rectangle9{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartnine 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare('SELECT * from voting where voting2= 14');
		$query->execute();
		$count = $query->rowCount();
		$x[9] = $count;
		?>	
	}
	@keyframes chartnine{
		from{height:0px;}
		to{height:<?php	echo 20+($x[9]*0.5);?>px;}
	}

	.rectangle10{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartten 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select * from voting where voting2= '17'");
$query->execute();
		$count = $query->rowCount();
		$x[10] = $count;
		?>	
	}
	@keyframes chartten{
		from{height:0px;}
		to{height:<?php	echo 20+($x[10]*0.5);?>px;}
	}

	.persen{
		opacity :0;
		transition:3s;
	}

	</style>
<?php
	function cariPersentasi(array $x,$dol){
	$size = count($x);
	$totalVote = 0;
	for($i = 1; $i <($size+1);$i++){
		$totalVote = $totalVote + $x[$i];
		}
	$maxVote = $x[$dol];
	if($totalVote > 0){
	$percentageVote = round(($maxVote/$totalVote) * 100);
}else{
	$percentageVote = 0;
}
	echo "<b style='font-size:40px;color:white;margin-top:-200px'>".$percentageVote."%"."</b>";
	}
?>
</head>
<body>

<center>
		<div class="logo">
			<img src="image/login-01.png" style="margin:auto;margin-top:20px;">
		</div>
		<div class="header">
			<img src="image/png-02.png" style="margin:auto;margin-top:20px;">
		</div>
</center>

	<div class="wrapper" >

	<div class="winner">

    	<h1  id ='name' style='text-align:center;color:white;font-size:45px'>The Highest Vote of Favourite Female Ambassador 2016<br/><br/>
		<b style='color:#F4EF84'> <?php
		$y = max($x);
		if(max($x) == 0)
			$x1 = "No Result";
		else
		if(max($x) == $x[1]){
			$x1 = "Lora - ";
			$y = "02";
}
		else
		if(max($x) == $x[2]){
			$x1 = "Naomi Ginting - ";
			$y = "03";
}
		else
		if(max($x) == $x[3]){
			$x1 = "Corina Sudjono - ";
			$y = "04";
}
		else
		if(max($x) == $x[4]){
			$x1 = "Angellyne Chanlie - ";
			$y = "07";
}
		else
		if(max($x) == $x[5]){
			$x1 = "Jackline - ";
			$y = "08";
}
		else
		if(max($x) == $x[6]){
			$x1 = "Angellia Chairiana - ";
			$y = "09";
}
		else
		if(max($x) == $x[7]){
			$x1 = "Tiffany Simon - ";
			$y = "10";
}
		else
		if(max($x) == $x[8]){
			$x1 = "Duangkamon - ";
			$y = "13";
}
		else
		if(max($x) == $x[9]){
			$x1 = "Tiffany - ";
			$y = "14";
}
		else
		if(max($x) == $x[10]){
			$x1 = "Faustine - ";
			$y = "17";
}
		
		 echo $x1.' ';echo '('.$y.')';  ?> </b></h1>		
 		 
	</div> 
	<div class="rectangle" style="width:30px;height:500px">
	<div class="rectangle1"></div><div class="persen" id="persen1" style="margin-bottom:-48px"><?php $asd = 1; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=02"><img src="image/number/02.png" style="margin-bottom:-558px"></a>
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:125px;margin-top:-500px">
	<div class="rectangle2"></div><div class="persen" id="persen2" style="margin-bottom:-48px"><?php $asd = 2; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=03"><img src="image/number/03.png" style="margin-bottom:-558px"></a>
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:250px;margin-top:-500px">
	<div class="rectangle3"></div><div class="persen" id="persen3" style="margin-bottom:-48px"><?php $asd = 3; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=04"><img src="image/number/04.png" style="margin-bottom:-558px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:375px;margin-top:-500px">
	<div class="rectangle4"></div><div class="persen" id="persen4" style="margin-bottom:-48px"><?php $asd = 4; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=07"><img src="image/number/07.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:500px;margin-top:-500px">
	<div class="rectangle5"></div><div class="persen" id="persen5" style="margin-bottom:-48px"><?php $asd = 5; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=08"><img src="image/number/08.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:625px;margin-top:-500px">
	<div class="rectangle6"></div><div class="persen" id="persen6" style="margin-bottom:-48px"><?php $asd = 6; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=09"><img src="image/number/09.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:750px;margin-top:-500px">
	<div class="rectangle7"></div><div class="persen" id="persen7" style="margin-bottom:-48px"><?php $asd = 7; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=10"><img src="image/number/10.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:875px;margin-top:-500px">
	<div class="rectangle8"></div><div class="persen" id="persen8" style="margin-bottom:-48px"><?php $asd = 8; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=13"><img src="image/number/13.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:1000px;margin-top:-500px">
	<div class="rectangle9"></div><div class="persen" id="persen9" style="margin-bottom:-48px"><?php $asd = 9; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=14"><img src="image/number/14.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:1125px;margin-top:-500px">
	<div class="rectangle10"></div><div class="persen" id="persen10" style="margin-bottom:-48px"><?php $asd = 10; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=17"><img src="image/number/17.png" style="margin-bottom:-552px">
	</div>

	</div>
	<center style="margin-top:140px"><a href="result.php">Next</a></center>
	<script>
		function opacity(){
			document.getElementById('name').style.opacity = "1";

		}
		setTimeout(opacity, 20000);

		function opacity1(){
			document.getElementById('persen1').style.opacity = "1";

		}
		setTimeout(opacity1, 8000);
		function opacity2(){
			document.getElementById('persen2').style.opacity = "1";

		}
		setTimeout(opacity2, 9000);
		function opacity3(){
			document.getElementById('persen3').style.opacity = "1";

		}
		setTimeout(opacity3, 10000);
		function opacity4(){
			document.getElementById('persen4').style.opacity = "1";

		}
		setTimeout(opacity4, 11000);
		function opacity5(){
			document.getElementById('persen5').style.opacity = "1";

		}
		setTimeout(opacity5, 12000);
		function opacity6(){
			document.getElementById('persen6').style.opacity = "1";

		}
		setTimeout(opacity6, 13000);
		function opacity7(){
			document.getElementById('persen7').style.opacity = "1";

		}
		setTimeout(opacity7, 14000);
		function opacity8(){
			document.getElementById('persen8').style.opacity = "1";

		}
		setTimeout(opacity8, 15000);
		function opacity9(){
			document.getElementById('persen9').style.opacity = "1";

		}
		setTimeout(opacity9, 16000);
		function opacity10(){
			document.getElementById('persen10').style.opacity = "1";

		}
		setTimeout(opacity10, 17000);
	</script>
</body>
</html>