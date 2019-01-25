<?php 
require('conec.php');


$id = $_POST['delete_id'];

$q = mysqli_query($con,"DELETE FROM imagenes WHERE id='$id'");



 ?>