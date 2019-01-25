
<?php 
require('conec.php');

                      $rs = mysqli_query($con, "SELECT * FROM usuarios");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id']."'>";  
                          echo "<td>" . $row['nombre'] .  "</td>";
                          echo "<td> ". $row['correo'] . "</td>";
                          echo "<td> ". $row['contrasena'] . "</td>";
                          
                        
                         // <a href='../Vista/editarproducto.php?id=".$row['id']."' class='btn btn-success'><i class='glyphicon glyphicon-edit'></i></a>
                      echo "<td>
                      <a class='btn-edit' data-toggle='modal' title='Editar' href='#infoModal' data-id=".$row['id']."><i class='glyphicon glyphicon-list-alt'></i></a>
                      
                      <a onclick='deleteAjax(".$row['id'].")' title='Eliminar' class='btn-delete'><i class='glyphicon glyphicon-trash'></i></a>
                      
                      </td>";
                     
                     
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>
<script type="text/javascript">
   
   function deleteAjax(id) {
    
    
     if (alertify.confirm('Esta seguro de que desea eliminar este pastel?','El elemento se eliminara permanentemente', function(){
       //alertify.success('Pastel Elininado'),
       $.ajax({
           type: 'post',
           url: 'EliminarUsu.php',
           data:{delete_id:id},
           success:function(data){
             
           location.href ="Usuarios.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>