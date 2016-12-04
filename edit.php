<?php
	require'connect.php';

	if(isset($_POST['nim']) && isset($_POST['password'])){
		$nim = $_POST['nim'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$query = $conn -> prepare("UPDATE user SET password=:password,name=:name,email=:email,dob=:dob,gender=:gender WHERE nim=:nim");
		$query -> bindParam(':nim', $nim);
		$query -> bindParam(':password', $password);
		$query -> bindParam(':name',$name);
		$query -> bindParam(':email',$email);
		$query -> bindParam(':dob',$dob);
		$query -> bindParam(':gender',$gender);
		$query -> execute();

		if($query){
			header('location:user_list.php');
			$_SESSION['pesan'] = "You have succesfully edit user with ID:  ".$nim;
		}else{
			header('location:user_list.php');
			$_SESSION['pesan'] = "Fail to edit user with ID:  ".$nim;
		}
	}
	
?>