<?php
	require_once 'connect.php';

		if (isLogin()){
			$nim=$_GET['nim'];
			$query  = $conn->prepare("select voting1,voting2 from voting where nim = :nim");
			$query->bindParam (':nim',$nim);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_BOTH);
			var_dump($result);
			echo "<br>";
			$first = $result['0'];
			$tes = $first['voting1'];
			$tes1 = $first['voting2'];
			var_dump ($tes);
			echo "<br>";
			var_dump ($tes1);
			if(($tes1 == "0" || $tes == "0") ||(is_null($tes) || $is_null($tes1))){
				echo "wtf";
				$query = null;
				$query = $conn->prepare("delete from user where nim = :nim");
				$query->bindParam(':nim',$nim);
				$query->execute();
				$query = null;
				$query = $conn->prepare("delete from voting where nim = :nim");
				$query->bindParam(':nim',$nim);
				$query->execute();
				$_SESSION['pesan'] = "Delete completed for user ".$nim;
				header("location:user_list.php");
				die();
			}else{
				echo "wtf1";
				header("location:user_list.php");
				$_SESSION['pesan'] = "User".$nim." has ever voted, so this user data can't be delete.";
				die();
			}
		}else{
			echo "hi,you need to login first lmao";
		}
		/*	
   			$query1 = $conn->prepare("update voting set voting1=:voting1 where nim=:nim");
			$query1->bindParam(':voting1',$voting1);
			$query1->bindParam(':nim',$nim);
			$query1->execute();
    		header("location:votefemale.php");
		}else{
			header("location:votemale.php"); 
		}
		*/
ob_end_flush();
?>