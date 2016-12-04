<?php
	require'connect.php';
	
	if(isset($_SESSION['nim'])){
		if($_SESSION['previous_link'] =="localhost/roderick/uas/add_user.php"){
			$nim = $_POST['nim'];
			$password = $_POST['password'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$dob = $_POST['dob'];
			$gender = $_POST['gender'];
			$query = $conn -> prepare("Insert into user values (:nim,:password,:name,:email,:dob,:gender)");
			$query -> bindParam(':nim', $nim);
			$query -> bindParam(':password', $password);
			$query -> bindParam(':name',$name);
			$query -> bindParam(':email',$email);
			$query -> bindParam(':dob',$dob);
			$query -> bindParam(':gender',$gender);
			$query -> execute();
				if($query){
				echo "BERHASIL TAMBAH DATA USER";
				header('location:user_list.php');
				$_SESSION['pesan'] = "You have succesfully add user with ID:  ".$nim;
			}else{
					echo "GAGAL TAMBAH DATA USER";
				}
		}else{
			$nim = $_SESSION['nim'];
			$query  = $conn->prepare("select voting1,voting2 from voting where nim = :nim");
			$query->bindParam (':nim',$nim);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_BOTH);
			$count = $query->rowCount();
			if($count > 1){
				$first = $result['0'];
				$tes = $first['voting1'];
				$tes1 = $first['voting2'];
				var_dump($tes);
				}else{
					$tes = null;
					$tes1 = null;
				}
			if(($tes1 == "0" && $tes == "0") ||(is_null($tes) && is_null($tes1))){
				
				$nim = $_SESSION['nim'];
				$password = $_POST['password'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$dob = $_POST['dob'];
				$gender = $_POST['gender'];
				var_dump($nim);
				var_dump($password);
				var_dump($name);
				var_dump($email);
				$query1 = $conn -> prepare("Update user set password=:password,name =:name,email =:email,dob =:dob,gender =:gender where nim = :nim");
				$query1 -> bindParam(':password', $password,PDO::PARAM_STR);
				$query1 -> bindParam(':name',$name,PDO::PARAM_STR);
				$query1 -> bindParam(':email',$email,PDO::PARAM_STR);
				$query1 -> bindParam(':dob',$dob,PDO::PARAM_STR);
				$query1 -> bindParam(':gender',$gender,PDO::PARAM_STR);
				$query1 -> bindParam(':nim', $nim,PDO::PARAM_STR);
				$query1 -> execute();
				if($query1){
					header('Location:user_list.php');
					$_SESSION['pesan'] = "You have succesfully altered the user with ID : ".$nim;
				}else{
				}
			}else{
			$_SESSION['pesan'] = "The guy voted, u can't delete that guy lul";
			}		
		}
	}else{
		echo "Not Logged In";
		die();
	}
?>