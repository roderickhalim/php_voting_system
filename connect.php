<?php
	session_start();

	try{
		$conn = new PDO('mysql:host=localhost; dbname=ambassador','root','');
	}catch (PDOEXception $e){
		die("Connection error : " . $e -> getMessage());
	}
	if(isset($_SESSION['actual_link'])){
	$_SESSION['previous_link'] = $_SESSION['actual_link'];
	}
	$_SESSION['actual_link'] = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];


	function isLogin(){
		if(isset($_SESSION['nim'])){
			return true;
		}else{
			return false;
		}
	}
?>