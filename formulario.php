<?php
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $solucion = $_POST['solucion'];
    $novedades = $_POST['novedades'];

    echo "<br/>".$nombre."<br/>".$correo."<br/>".$solucion."<br/>".$novedades."<br/>"; 
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "marcelo@solaring.com.ar";
    $to = "marcelo@solaring.com.ar";
    $subject = "Nueva consulta web";
    $message = "Nombre: ".$nombre."<br/>"."email: ".$correo."<br/>"."Interes en: ".$solucion."<br/>"."Suscripcion ?: ".$novedades;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Mensaje enviado, Muchas Gracias !!";

?>