<?php

require('conec.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; 
    

$rs = mysqli_query($con, "SELECT * FROM imagenes where id =$id");
    $row = mysqli_fetch_array($rs);
    $codigoPro =$row['id'];
    $nombre=$row['nombre'];
    $des=$row['descripcion'];
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
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
  <script>
    
     function ima() {
      $('#im').change(function(e) {
          addImage(e); 
         });
     
         function addImage(e){
          var file = e.target.files[0],
          imageType = /image.*/;
        
          if (!file.type.match(imageType))
           return;
      
          var reader = new FileReader();
          reader.onload = fileOnload;
          reader.readAsDataURL(file);
         }
      
         function fileOnload(e) {
          var result=e.target.result;
          $('#imgSalida').attr("src",result);
         }
        }
    
          
         </script>