<?php
	require'connect.php';

	if(isset($_POST['nim']) && isset($_POST['password'])){
		$nim = $_POST['nim'];
		$password = $_POST['password'];
		$query = $conn -> prepare("Insert into user values (:nim,:password)");
		$query -> bindParam(':nim', $nim);
		$query -> bindParam(':password', $password);
		$query -> execute();

		if($query){
			echo "BERHASIL TAMBAH DATA USER";
			//redirect
			$path = 'index.php';
			header('Location:'.$path);
		}else{
			echo "GAGAL TAMBAH DATA USER";
		}
	}
	
?>