<?php

require('conec.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; 
    

$rs = mysqli_query($con, "SELECT * FROM usuarios where id =$id");
    $row = mysqli_fetch_array($rs);
    $codigo =$row['id'];
    $nombre=$row['nombre'];
    $correo=$row['correo'];
    $contra=$row['contrasena'];
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-6' style='display: none'>
    <label for='sel1'>Id</label>
        <input type='text' class='form-control' id='Cod' name='Cod' required=''   value='".$codigo."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Nombre</label>
        <input type='text' class='form-control' id='Nombre' name='Nombre' required='' value='".$nombre."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Correo</label>
        <input type='email' class='form-control'  id='Correo' name='Correo' required='' value='".$correo."'>
    </div>
    <br>
    <br>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Contraseña</label>
    <input type='text' class='form-control'  id='Contrasena' name='Contrasena' required=''value='".$contra."'>    
    </div>
    
    </div>
    
    ";
     
   
 }
 mysqli_close($con);
?>