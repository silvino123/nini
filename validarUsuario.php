<?php
require('conec.php');

$nombre = trim($_POST['email']);
$password = trim($_POST['Password']);

$rs  = "SELECT * FROM usuarios WHERE correo = '$nombre' AND Contrasena = '$password'";
$qs = mysqli_query($con, $rs);
$row    = mysqli_fetch_assoc($qs);
if (!isset($row)) {
    header("location: ../login.html");
}
         $id  = $row['id'];
         $nombre= $row["correo"];
         $password = $row['Contrasena'];


if ($row["correo"] === $nombre && $row["Contrasena"] === $password) {
        session_start();
        $_SESSION["correo"] = $nombre;
        $_SESSION["id"] = $id;
        

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";
        echo "
                <script>
                 document.location.href = 'admin.html';
                </script> ";
        

    } 
    else {
        echo "
                <script type='text/javascript'>
                var mensaje='Usuario o contraseña incorrecto';
                alert(mensaje);

                </script>";
        echo "
                <script>
                 document.location.href = 'login.html';
                </script> ";
        
        
    }



?>
