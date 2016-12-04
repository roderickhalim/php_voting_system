<?php
require 'connect.php';
set_time_limit(0);
for ($i=1; $i <= 300 ; $i++) { 
	$j = 1;
	# code...
	$query = $conn -> prepare("Insert into voting values (:nim, :voting1, :voting2)");
	$query ->bindParam(':nim',$i);
	$query ->bindParam(':voting1',$j);
	$query ->bindParam(':voting2',$j);
	$query->execute();
}
?>