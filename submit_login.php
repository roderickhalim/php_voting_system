<?php
	require 'connect.php';

	if (isset($_POST['nim']) && isset($_POST['password'])){
		$nim = $_POST['nim'];
		$password = $_POST['password'];

		$query = $conn -> prepare ('SELECT * FROM user WHERE nim = :nim and password = :password');
		$query -> bindParam(':nim', $nim);
		$query -> bindParam(':password', $password);
		$query -> execute();
		$count = $query -> rowCount();
		var_dump($count);

		if ($count > 0){
			$query = $conn -> prepare ('SELECT * FROM voting WHERE nim = :nim');
			$query -> bindParam(':nim',$nim);
			$query -> execute();
			$count = $query -> rowCount();
			var_dump($count);
			if ($count > 0){
				header('Location:index.php');
				$_SESSION['flash'] = "Sorry, you have voted.";
			}else{
				$_SESSION['nim'] = $nim;
				header('Location:votemale.php');
			}
		}else{
			//redirect
			header("Location:index.php");
			$_SESSION['flash'] = "Your username / password is wrong.";
		}
	}else{
		//redirect
		header("Location:index.php");
	}
?>