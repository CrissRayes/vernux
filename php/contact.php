<?php

  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $phone    = $_POST['phone'];
  $comments = $_POST['comments'];
 
  $para = 'cristian.ramirez.cl@gmail.com';  
  $titulo = 'Contacto desde sitio web';

  $mensaje = "Nombre: $name <br>";
  $mensaje .= "Email: $email <br>";
  $mensaje .= "Fono: $phone <br>";
  $mensaje .= "Mensaje: ";
  $mensaje .= '<p>'.$comments.'</p>';

  $cabecera = 'De:'.$name.'<'.$email.'>' . "\r\n";
  $cabecera .= 'X-Mailer: PHP/' .phpversion();
  $cabecera .= 'MIME-Version: 1.0' . "\r\n";
  $cabecera .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  // $cabecera .= "X-Mailer: PHP7\n";

  $exito = mail($para, $titulo, $mensaje, $cabecera);
  // or die("Error!");
  if($exito) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Comercializadora Vernux SpA</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
  rel="stylesheet" type="text/css" />
  <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
  <div class="container">
  <h1>Hemos recibido tu consulta y te contactaremos a la brevedad!</h1>
  <p class="back">Regresar a <a href="../index.html">www.vernux.cl</a></p>
  </div>
  </body>
  </html>
  ';
}
?>