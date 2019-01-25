<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$descripcion=$_POST['Descripcion'];
$cat=$_POST['Cat'];
$img=$_POST['im'];

$destino="imagenes/Pasteles/";
$imagens=$_FILES['im']['tmp_name'];
$nomimagen=$_FILES['im']['name'];
$ext= pathinfo($nomimagen);
$d=rand(1,30);
  echo $d 
move_uploaded_file($imagens, $destino."/".$d.".".$ext['extension']);
$nom=$d.".".$ext['extension'];
	$q= "INSERT INTO imagenes (id,nombre,descripcion,categoria,imagen) 
				  values ('','$nombre','$descripcion','$cat','$nom')";

$ejecuta_q= mysqli_query($con,$q) or die("a");



mysqli_close($con);
echo'<script type="text/javascript">
    alert("El pastel se ha agregado exitosamente");
    location.href="imagenes.php";
    </script>';

 ?>