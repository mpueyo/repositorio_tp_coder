<?php
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $solucion = $_POST['solucion'];
    $novedades = $_POST['novedades'];

       
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "marcelo@solaring.com.ar";
    $to = "marcelo@solaring.com.ar";
    $subject = "Nueva consulta web";
    $message = "Nombre: ".$nombre."<br/>"."email: ".$correo."<br/>"."Interes en: ".$solucion."<br/>"."Suscripcion ?: ".$novedades;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo/estilo.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;281;500;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;281;500;900&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Obras-Finalizadas</title>
    <meta name="keywords" content="paneles solares, energia solar, paneles fotovoltaicos, generacion distribuida, energia limpia">
    <meta name="description" content="Te mostramos algunas de nuestras obras finalizadas en diferentes clientes.">
    
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row cabecera"> 
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    <img id="avatar" src="imagenes/isologo.png" alt="logo de la empresa">
                </div>
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    Diseñamos Sistemas
                </div>
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    Integramos tecnología
                </div>
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    Entregamos Soluciones
                </div>

            </div>

        </div>
    </header>


    <nav class="nav flex-column flex-sm-row">
                
        <a class="flex-sm-fill text-center nav-link txt" href="index.html">Inicio</a>
        <a class="flex-sm-fill text-center nav-link txt" href="Obras-Finalizadas.html">Obras Finalizadas</a>
        <a class="flex-sm-fill text-center nav-link txt" href="Contacto.html">Contacto</a>
        <a class="flex-sm-fill text-center nav-link txt" href="Novedades.html">Novedades</a>
        <a class="flex-sm-fill text-center nav-link txt" href="Sitemap.html">Site Map</a>

    </nav>

    <main>
        <div class="container text-center">        
            <br>
            <h1>Tu mensaje ha sido enviado</h1>
            <p></p>
            <br>
            <br>
            <a href="index.html" class="btn btn-primary">Volver a inicio</a>
            <br>
            <h5>Gracias por contactarnos!</h5>
            <br>        
        </div>
      
        
    
    </main>
        
    
    <footer class="nav flex-column flex-sm-row">

        <a class="flex-sm-fill text-center nav-link txt" href="https://www.facebook.com/solar.ing.ar" target="_blank">Facebook</a>
        <a class="flex-sm-fill text-center nav-link txt" href="https://www.linkedin.com/company/27116044/" target="_blank">LinkedIn</a>
        <a class="flex-sm-fill text-center nav-link txt" href="https://www.instagram.com/solar.ing_ar" target="_blank">Instagram</a>
        <a class="flex-sm-fill text-center nav-link txt" href="https://www.youtube.com/solar.ing_ar" target="_blank">YouTube</a>

    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>