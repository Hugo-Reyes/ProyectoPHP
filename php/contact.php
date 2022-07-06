<?php
$destino = "team@codigobits.com";
$nombre = $_POST["nombre_completo"];
$correo = $_POST["correo_electrónico"];
$lugar = $_POST["ciudad_pais"];
$colaboracion = $_POST["colaboracion"];
$red_social = $_POST["red_social"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre completo: " . $nombre . "\nCorreo electrónico: " . $correo . "\nPaís donde reside: " . $lugar . "\nColaboración: " . $colaboracion . "\n¿Cómo te enteraste de nosotros?: " . $red_social ."\n\nMensaje:\n" . $mensaje;
$contenido=utf8_decode($contenido);
$colaboracion=utf8_decode($colaboracion);
$resultado = mail($destino, $colaboracion, $contenido);

    if($resultado){
        echo'<script type="text/javascript">
    alert("Se envio el correo con éxito, en un momento te responderemos.");
    window.location.href="/index.php";
    </script>';
    }else{
       echo'<script type="text/javascript">
    alert("No se envio");
    window.location.href="/index.php";
    </script>';
    }
?>