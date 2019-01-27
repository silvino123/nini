<?php 
require('conec.php');


$id = $_POST['delete_id'];

// $selecionar = "SELECT imagen FROM imagenes WHERE id = '$id'";
// $resultado_seleccionar = mysqli_query($con, $selecionar);
// $ruta_foto_db = "imagenes/Pasteles/" . $resultado_seleccionar['imagen'];
// unlink($ruta_foto_db);


$q = mysqli_query($con,"DELETE FROM imagenes WHERE id='$id'");



 ?>