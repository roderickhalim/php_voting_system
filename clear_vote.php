<?php
require 'connect.php';
$query = $conn -> prepare('TRUNCATE TABLE voting');
$query -> execute();
header('Location:admin.php')
 ?>
