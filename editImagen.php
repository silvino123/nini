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

$rs = mysqli_query($con,"SELECT imagen FROM imagenes WHERE id='$id'");
	$foto = mysqli_fetch_array($rs);
    $destino2="imagenes/Pasteles/".$foto['imagen'];
    
    
if (!file_exists($destino.$nom)) {
    move_uploaded_file($imagens, $destino."/".$pastel.".".$ext['extension']);
}
if($_FILES["im"]["name"]){
    if(file_exists($destino2)){
        unlink($destino.$foto['imagen']);
    }
    $qss ="UPDATE imagenes set nombre='$nombre',descripcion='$des',categoria='$cat',codigo='$pastel',imagen='$nom' WHERE id=$id"; 


}else{
    $qss ="UPDATE imagenes set nombre='$nombre',descripcion='$des',categoria='$cat' WHERE id=$id"; 


    
}
$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: imagenes.php');


 ?>