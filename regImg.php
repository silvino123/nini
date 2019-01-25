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
$d=rand(1,3000);
$pastel="pastel".$d;
move_uploaded_file($imagens, $destino."/".$pastel.".".$ext['extension']);
$nom=$pastel.".".$ext['extension'];
	$q= "INSERT INTO imagenes (id,nombre,descripcion,categoria,codigo,imagen) 
				  values ('','$nombre','$descripcion','$cat','$pastel','$nom')";

$ejecuta_q= mysqli_query($con,$q) or die("a");



mysqli_close($con);
echo'<script type="text/javascript">
    alert("El pastel se ha agregado exitosamente");
    location.href="imagenes.php";
    </script>';

 ?>