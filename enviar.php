<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>BiblioWare</title>
</head>
<body>
    <form action="">
            <img src="logo.PNG" alt="">
    </form>
    
    <h1>Gracias!!
    </h1>
    <h3>
        Biblioware agradece sus comentarios...
    </h3>
    
</body>
</html>

<?php
$destino= "itj.18469@gmail.com"
$nombre= $_POST["Nombre"];
$correo= $_POST["Correo"];
$telefono= $_POST["Telefono"];
$mensaje= $_POST["Mensaje"];
$contenido = "Nombre: ".$nombre."\n Correo:".$correo."\n Telefono:".$telefono."\n Mensaje:".$mensaje;

$header = "From: jesus8hato@gmail.com" . "\r\n";
$header.= "Reply-To: jesus8hato@gmail.com" . "\r\n";
$header.= "X-Mailer: PHP/". phpversion();

mail($destino,"Contacto",$contenido,$header);
?>
