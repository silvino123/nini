<?php 
require('conec.php');

                      $rs = mysqli_query($con, "SELECT * FROM imagenes");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id']."'>";  
                          echo "<td>" . $row['nombre'] .  "</td>";
                          echo "<td> ". $row['descripcion'] . "</td>";
                          echo "<td> ". $row['categoria'] . "</td>";
                          echo "<td><img style="."width:50px;height:50px"." src="."imagenes/Pasteles/".$row['imagen']."></td>"; 
                        
                  
                      echo "<td>
                      <a class='btn btn-info' data-toggle='modal' href='#infoModal' data-id=".$row['id']."><i class='glyphicon glyphicon-list-alt'></i></a>
                       <a href='../Vista/editarproducto.php?id=".$row['id']."' class='btn btn-success'><i class='glyphicon glyphicon-edit'></i></a>
                      <a onclick='deleteAjax(".$row['id'].")' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
                      
                      </td>";
                     
                     
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>





 <script type="text/javascript">
   
  function deleteAjax(id) {
    if (alertify.confirm('Esta seguro de que desea eliminar este pastel?','El elemento se eliminara permanentemente', function(){
      alertify.success('Pastel Elininado'),
      $.ajax({
          type: 'post',
          url: '../Controlador/EliminarProductoController.php',
          data:{delete_id:id},
          success:function(data){

            location.href ="imagenes.php";
          }
      });
     },
     function(){alertify.error('Operacion Cancelada')})) {


    }
  }

 </script>