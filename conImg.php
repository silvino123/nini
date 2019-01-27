

<?php 
require('conec.php');

                      $rs = mysqli_query($con, "SELECT * FROM imagenes");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id']."'>";  
                          echo "<td>" . $row['nombre'] .  "</td>";
                          echo "<td> ". $row['descripcion'] . "</td>";
                          echo "<td> ". $row['categoria'] . "</td>";
                          echo "<td><img style="."width:50px;height:50px"." src="."imagenes/Pasteles/".$row['imagen']."></td>"; 
                        
                         // <a href='../Vista/editarproducto.php?id=".$row['id']."' class='btn btn-success'><i class='glyphicon glyphicon-edit'></i></a>
                      echo "<td>
                      <a class='btn-edit' data-toggle='modal' title='Editar' href='#exampleModal' data-id=".$row['id']."><i class='glyphicon glyphicon-list'></i></a>
                      
                      <a onclick='deleteAjax(".$row['id'].")' title='Eliminar' class='btn-delete'></a>
                      
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
          url: 'EliminarImg.php',
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