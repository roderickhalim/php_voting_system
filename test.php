<?php
set_time_limit(0);
	for($i =1 ;$i<=1000;$i++){
		$id[$i] =random_int(10000,99999);
		$test[$i] = bin2hex(random_bytes(3));
		$test[$i] = substr($test[$i],0,5);
			if($i <=400){
				$test[$i] = $test[$i] ."0";
			}else{
				$test[$i] = $test[$i] ."1";
			}

		}	
	$vals = array_count_values($test);
	$vals = array_count_values($test);
	echo 'No. of NON Duplicate Items: '.count($id).'<br><br>';
	echo 'No. of NON Duplicate Items: '.count($vals).'<br><br>';
	if(count($id) == 1000 && count($vals) == 1000){
		require_once 'connect.php';
		for($i = 1;$i<=1000;$i++){
		$query = $conn -> prepare("Insert into user values (:username, :password)");
		$query ->bindParam(':username',$id[$i]);
		$query ->bindParam(':password',$test[$i]);
		$query->execute();
	}
	}

?>