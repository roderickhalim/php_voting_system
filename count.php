<?php

	require 'connect.php';
	$j = 1;
	for($i = 1;$i<=20;$i++){
		$query = $conn -> prepare("select count(vote) as Amount from voting where vote = (:angka)");
		$query -> bindParam(':angka', $i);
//		$query -> bindParam(':angka2',$j);
		$query -> execute();
		if($query){
			$x[$i] = $query->fetchColumn();
		}
	}


	for($i = 1;$i<=20;$i++){
		echo 'Contestan nomor '.$i.': ';
		echo  $x[$i];
		echo '<br>';
	}
	//split array into 2 different declaration(?)
	for($i = 1;$i<=10;$i++){
		$a[$i] = $x[$i];
	}
	for($i = 11;$i<=20;$i++){
		$b[$i-10] = $x[$i];
	}
	arsort($a);
	arsort($b);
	foreach($a as $x){
		echo $x;
		echo "<br>";
	}
	foreach($b as $x){
		echo $x;
		echo "<br>";
	}	
	/*
	function getmax($i){
		for($x = 1;$x<10;$x++){
			if($i[$x] > $i[$x+1]){
				$max = $i[$x];
			}else{
				$max = $i[$x+1];
			}	
	return $max;
	
	}
}
*/

?>