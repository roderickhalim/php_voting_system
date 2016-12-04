<?php
require 'connect.php';
	
	$nim = "1234";
	$voting1 = "1";
	$voting2 = "3";
	$query = $conn -> prepare('Insert into voting(nim,voting2,voting1)values(:nim,:voting2,:voting1)');	
	$query->bindParam(':nim', $nim);
	$query->bindParam(':voting2', $voting2);
	$query->bindParam(':voting1', $voting1);
	$result = $query->execute();
?>