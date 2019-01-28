<?php
require('conec.php');

$correo = trim($_POST['email']);
$password = trim($_POST['Password']);

$rs  = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$password'";
$qs = mysqli_query($con, $rs);
$row    = mysqli_fetch_assoc($qs);
// if (!isset($row)) {
//     header("location: login.html");
// }
         $id  = $row['id'];
         $nombre= $row['correo'];
         $contraseña = $row['contrasena'];

        session_start();
if ($row["correo"] == $correo && $row["contrasena"] == $password) {
       
        
        $_SESSION['nombre'] = $nombre;
        $_SESSION['id'] = $id;

         

        echo "
                <script language='JavaScript'>
                var mensaje='Sesion iniciada';
                alert(mensaje);

                </script>";
        echo "
                <script>
                 document.location.href = 'admin.php';
                </script> ";
        

    } 
    else {
        echo "
                <script language='JavaScript'>
                var mensaje='Usuario o contraseña incorrecto';
                alert(mensaje);

                </script>";
        echo "
                <script>
                 document.location.href = 'login.html';
                </script> ";
        
        
    }



?>
 <!-- <script language='JavaScript'>
         function Sesion(){
                alertify
               .alert('Sesion iniciada', function(){
                  alertify.message('OK');
                  });
         }
 </script> -->