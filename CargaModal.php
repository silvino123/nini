<?php

require('conec.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; 
    

$rs = mysqli_query($con, "SELECT * FROM imagenes where id =$id");
    $row = mysqli_fetch_array($rs);
    $idm =$row['id'];
    $nombre=$row['nombre'];
    $des=$row['descripcion'];
    $cat=$row['categoria'];
    $ima=$row['imagen'];
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-6' style='display: none'>
    <label for='sel1'>Id</label>
        <input type='text' class='form-control' id='Cod' name='Cod' required=''   value='".$idm."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Nombre</label>
        <input type='text' class='form-control' placeholder='Nombre Pastel' id='Nombre' name='Nombre' value='".$nombre."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Descripcion</label>
        <input type='text' class='form-control' placeholder='Descripcion' id='Descripcion' name='Descripcion' value='".$des."'>
    </div>
    <br>
    <br>
    <div class='col-lg-6'>
        <label for='sel1'>Selecciona el tipo de Pastel</label>
        <br>
        <select class='form-control' id='sel1' id='Cat' name='Cat'>
        <option value='".$cat."' selected=''>".$cat."</option>
           <option value='Personajes'>Personajes</option>
            <option value='CupCakes'>CupCakes</option>
            <option value='Panque'>Panque</option>
            <option value='inicio'>inicio</option>
        </select>
    </div>
   
    <div class='col-12 col-lg-6'>
            <label for='sel1'>Imagen:</label>
            <span class='fileinput-filename'></span>
        <input type='file' class='form-control' id='im' name='im'/>
    </div>
    
    <div class='col-12 col-lg-6'>
       <img id='imgSalida' width='50%' height='50%' src='' />      
   </div></div>";
     
   
 }
?>
  