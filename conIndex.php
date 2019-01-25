<?php 
require('conec.php');

                 
$rs = mysqli_query($con,"SELECT * FROM imagenes where categoria='inicio'")or die("error al cargar imagenes");

                       while($row = mysqli_fetch_array($rs)){
                       echo "<div class='col-12 col-sm-6 col-md-4'>";
                      echo "<div class='caviar-single-dish wow fadeInUp' data-wow-delay='0.5s'>";
                       echo "<img style="."width:200px;height:200px;border-radius:150px"." src="."imagenes/Pasteles/".$row['imagen'].">";   
                      echo "<div class='dish-info'>";
                      echo"<h6 class='dish-name'>". $row['nombre'] ."</h6>";
                      echo "</div>";
                       echo "</div>";
                       echo "</div>";
                      }

                      mysqli_close($con);


 ?>





 