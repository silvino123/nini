<?php 
require('conec.php');

                 
$rs = mysqli_query($con,"SELECT * FROM imagenes where categoria='Personajes'")or die("error al cargar imagenes");

                       while($row = mysqli_fetch_array($rs)){
                       echo "<div class='d-sm-flex align-items-center'>";
                      
                       echo "<img style="."width:200px;height:200px;border-radius:150px"." src="."imagenes/Pasteles/".$row['imagen'].">";   
                      echo "<div class='dish-description'>";
                      echo"<h6 class='dish-name'>". $row['nombre'] ."</h6>";
                      echo"<p>". $row['descripcion'] ."</p>";
                      echo "</div>";
                       echo "</div>";
                       
                      }

                      mysqli_close($con);


 ?>