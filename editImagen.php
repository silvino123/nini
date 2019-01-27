<?php 

require('conec.php');
$id=$_POST['Cod'];
$nombre=$_POST['Nombre'];
$des=$_POST['Descripcion'];
$cat=$_POST['Cat'];

$destino="imagenes/Pasteles/";
$imagens=$_FILES['im']['tmp_name'];
$nomimagen=$_FILES['im']['name'];
$ext= pathinfo($nomimagen);
$d=rand(0,9).rand(100,9999).rand(100,9999);
$pastel="pastel".$d;
move_uploaded_file($imagens, $destino."/".$pastel.".".$ext['extension']);
$nom=$pastel.".".$ext['extension'];
$destino2="imagenes/Pasteles/".".".$nomimagen;

// if (!file_exists($destino2)) {
//     move_uploaded_file($imagens, $destino."/".$pastel.".".$ext['extension']);
// }
if($_FILES["im"]["name"]){
 $selecionar = "SELECT imagen FROM imagenes WHERE id = '$id'";
$resultado_seleccionar = mysqli_query($con, $selecionar);
$ruta_foto_db = "imagenes/Pasteles/" . $resultado_seleccionar['imagen'];

if(file_exists($ruta_foto_db)){
    unlink($ruta_foto_db);
}
$foto_db = mysqli_fetch_array($resultado_seleccionar);
    $qss ="UPDATE imagenes set nombre='$nombre',descripcion='$des',categoria='$cat',codigo='$pastel',imagen='$nom' WHERE id=$id"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");
}else{
    $qss ="UPDATE imagenes set nombre='$nombre',descripcion='$des',categoria='$cat' WHERE id=$id"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");
    
}


mysqli_close($con);
header('Location: imagenes.php');


 ?>