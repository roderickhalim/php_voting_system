<?php
require_once 'connect.php';
ini_set('max_execution_time', 0);

?>

<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' href='image/icon.ico' type='image/x-icon' />
	<title>Result : Male</title>

	<style type="text/css">
	h2{
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
		background-color:#000;
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
		$query 	= $conn->prepare("select * from voting where voting1 ='1'");
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
		$query 	= $conn->prepare("select * from voting where voting1 = '5'");
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
		$query = $conn->prepare("select * from voting where voting1= '6'");

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
		$query = $conn->prepare("select *  from voting where voting1= '11'");

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
		$query = $conn->prepare("select * from voting where voting1= '12'");
		$query->execute();
		$count = $query->rowCount();
		$x[5] = $count;
		?>
	}


	@keyframes chartfive{
		from{height:0px;}
		to{height:<?php	echo 20+($x[5]*0.5);?>px;}
	}

	.rectangle6{
		position:absolute;
		bottom:0;
		width:30px;

		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartsix 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select * from voting where voting1= '15'");
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
		$query = $conn->prepare("select * from voting where voting1= '16'");
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
		$query = $conn->prepare("select * from voting where voting1= '18'");
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
		$query = $conn->prepare("select * from voting where voting1= '19'");
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
		$query = $conn->prepare("select * from voting where voting1= '20'");
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

</head>
<body>

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

<h2  id ='name' style='text-align:center;color:white;font-size:45px'>The Most Favourite Male Ambassador of UPH Medan 2016<br><br><b style='color:#F4EF84'> <?php
		$y = max($x);
		if(max($x) == 0)
			$x1 = "No Result";
		else
		if(max($x) == $x[1]){
			$x1 = "Salvian Kumara - ";
			$y = "01";
}
		else
		if(max($x) == $x[2]){
			$x1 = "Derian Ottoman - ";
			$y = "05";
}
		else
		if(max($x) == $x[3]){
			$x1 = "Stevan Angestu - ";
			$y = "06";
}
		else
		if(max($x) == $x[4]){
			$x1 = "Denny - ";
			$y = 11;
}
		else
		if(max($x) == $x[5]){
			$x1 = "Diky Tanhari - ";
			$y = 12;
}
		else
		if(max($x) == $x[6]){
			$x1 = "Kevin - ";
			$y = 15;
}
		else
		if(max($x) == $x[7]){
			$x1 = "Wilbert Lauren - ";
			$y = 16;
}
		else
		if(max($x) == $x[8]){
			$x1 = "George Lie - ";
			$y = 18;
}
		else
		if(max($x) == $x[9]){
			$x1 = "Surya Anthony - ";
			$y = 19;
}
		else
		if(max($x) == $x[10]){
			$x1 = "Aris Mismoyo - ";
			$y = 20;
}
		 echo $x1.' ';echo '('.$y.')'; ?> </b></h2>

	</div>
	<div class="rectangle" style="width:30px;height:500px">
	<div class="rectangle1"></div><div class="persen" id="persen1" style="margin-bottom:-48px"><?php $asd = 1; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=01"><img src="image/number/01.png" style="margin-bottom:-558px"></a>
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:125px;margin-top:-500px">
	<div class="rectangle2"></div><div class="persen" id="persen2" style="margin-bottom:-48px"><?php $asd = 2; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=05"><img src="image/number/05.png" style="margin-bottom:-558px"></a>
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:250px;margin-top:-500px">
	<div class="rectangle3"></div><div class="persen" id="persen3" style="margin-bottom:-48px"><?php $asd = 3; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=06"><img src="image/number/06.png" style="margin-bottom:-558px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:375px;margin-top:-500px">
	<div class="rectangle4"></div><div class="persen" id="persen4" style="margin-bottom:-48px"><?php $asd = 4; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=11"><img src="image/number/11.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:500px;margin-top:-500px">
	<div class="rectangle5"></div><div class="persen" id="persen5" style="margin-bottom:-48px"><?php $asd = 5; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=12"><img src="image/number/12.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:625px;margin-top:-500px">
	<div class="rectangle6"></div><div class="persen" id="persen6" style="margin-bottom:-48px"><?php $asd = 6; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=15"><img src="image/number/15.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:750px;margin-top:-500px">
	<div class="rectangle7"></div><div class="persen" id="persen7" style="margin-bottom:-48px"><?php $asd = 7; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=16"><img src="image/number/16.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:875px;margin-top:-500px">
	<div class="rectangle8"></div><div class="persen" id="persen8" style="margin-bottom:-48px"><?php $asd = 8; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=18"><img src="image/number/18.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:1000px;margin-top:-500px">
	<div class="rectangle9"></div><div class="persen" id="persen9" style="margin-bottom:-48px"><?php $asd = 9; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=19"><img src="image/number/19.png" style="margin-bottom:-552px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:1125px;margin-top:-500px">
	<div class="rectangle10"></div><div class="persen" id="persen10" style="margin-bottom:-48px"><?php $asd = 10; cariPersentasi($x,$asd);?></div>
	<br>
	<a href="profile.php?id=20"><img src="image/number/20.png" style="margin-bottom:-552px">
	</div>

	</div>
	<center style="margin-top:140px"><a href="female.php">Next</a></center>
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
