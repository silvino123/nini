<?php 

require('conec.php');
$id=$_POST['Cod'];
$nombre=$_POST['Nombre'];
$correo=$_POST['Correo'];
$contra=$_POST['Contrasena'];

$qss ="UPDATE usuarios set nombre='$nombre',correo='$correo',contrasena='$contra' WHERE id=$id"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: Usuarios.php');


 ?>