<?php
$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Sabor = $_POST['Sabor'];
$Tamaño = $_POST['Tamaño'];
$Fecha = $_POST['Fecha_Entrega'];
$Telefono = $_POST['Telefono'];
$Personaje = $_POST['Personaje'];
$Imagen = $_POST['Imagen'];
$Direccion = $_POST['Direccion'];
$Mensaje = $_POST['Mensaje'];


$Destinatario = "jose.jrmg27@gmail.com";
$Asunto = "Cotizacion Nini & Co.";


$Carta = "De: $Nombre \n";
$Carta.= "Correo: $Email \n";
$Carta .= "Telefono: $Telefono \n";
$Carta .= "Dirección: $Direccion \n"; 
$Carta .= "Datos del Pedido: \n";
$Carta .= "Sabor: $Sabor \n";
$Carta .= "Tamaño: $Tamaño \n";
$Carta .= "Fecha de Entrega: $Fecha \n";
$Carta .= "Personaje: $Personaje \n";
$Carta .= "Mensaje $Mensaje \n";
$Carta .= "Imagen : $Imagen";

mail($Destinatario,$Asunto, $Carta);
echo "
                <script language='JavaScript'>
                var mensaje = 'Cotización Enviada Espere Respuesta de Nini & Co. A Su Correo';
                alert(mensaje);
                </script>";
        echo "
                <script>
                 document.location.href = 'ordenar.html';
                </script> ";

?>