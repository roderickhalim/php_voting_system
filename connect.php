<?php
	session_start();

	try{
		$conn = new PDO('mysql:host=localhost; dbname=ambassador','root','');
	}catch (PDOEXception $e){
		die("Connection error : " . $e -> getMessage());
	}


	function isLogin(){
		if(isset($_SESSION['nim'])){
			return true;
		}else{
			return false;
		}
	}
?>