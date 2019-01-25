<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$correo=$_POST['Correo'];
$contra=$_POST['Contrasena'];

	$q= "INSERT INTO usuarios (id,nombre,correo,contrasena) 
				  values ('','$nombre','$correo','$contra')";

$ejecuta_q= mysqli_query($con,$q) or die("Error al insertar");



mysqli_close($con);
echo'<script type="text/javascript">
    alert("Usuario registrado exitosamente");
    location.href="Usuarios.php";
    </script>';

 ?>