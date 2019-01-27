<?php 
require('conec.php');


$id = $_POST['delete_id'];
$destino="imagenes/Pasteles/";
$rs = mysqli_query($con,"SELECT imagen FROM imagenes WHERE id='$id'");

	$foto = mysqli_fetch_array($rs);
		
	unlink($destino.$foto['imagen']);

$q = mysqli_query($con,"DELETE FROM imagenes WHERE id='$id'");



 ?>