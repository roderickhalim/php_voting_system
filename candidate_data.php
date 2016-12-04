<?php
require_once'connect.php';

if (isset($_POST['nomor'])){
	$no = $_POST['nomor'];
	$name = $_POST['name'];
	$target_dir="image/final/";
	$target_file=$target_dir.basename($_FILES["image"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["image"]["tmp_name"],$target_file.$imageFileName);
	$query = $conn -> prepare("Insert into kandidat values (:nomor,:name,:image)");
	$query -> bindParam(':nomor',$no);
	$query -> bindParam(':name',$name);
	$query -> bindParam(':image',$target_file);
	$query -> execute();



	// header('Location:')
}
?>