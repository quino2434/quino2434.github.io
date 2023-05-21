<?php
/*error_reporting (E_ALL); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require ('PHPMailer/src/Exception.php');
require ('PHPMailer/src/PHPMailer.php');
require ('PHPMailer/src/SMTP.php');

$plan = $_POST["inptHiddenPlan"];
$seccion = $_POST["inptHidden"];
$nombre = $_POST["inptNombre"];
$telefono = $_POST["inptTelefono"];
$correo = $_POST["inptCorreo"];
$calle = $_POST["inptCalle"];
$nro = $_POST["inptNro"];
$ciudad = $_POST["inptCiudad"];
$CP = $_POST["inptCP"];
$pcia = $_POST["inptPcia"];
$pais = $_POST["inptPais"];
$comentario = $_POST["txtComentario"];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'c2171484.ferozo.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'contacto@indigodigitalweb.com.ar';                     //SMTP username
$mail->Password   = 'Quino2431';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465; 
$mail->isHTML(true); 
$mail->addAddress('contacto@indigodigitalweb.com.ar', 'Jos&eacute; Enrique Bianchimano'); 

?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/icono_buting.png">
    <link rel="stylesheet" href="css/stylesSend.css">
    <script src="jquery/jquery3.60.js"></script>
    <script src="js/main.js"></script>
    <title>Envío de mensaje | indigodigitalweb.com.ar</title>
</head>
<body>

<?php

if (isset($seccion) && !empty($seccion) && $seccion=='contacto'){
 if (isset($nombre) && isset($correo) && isset($telefono) && isset($comentario)){

 $asunto= "Mensaje desde indigodigitalweb.com.ar";    

 $cuerpo = "<!DOCTYPE html>
 <html lang='en'>
 <head>
 <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'> 
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  </head>
 <body style='background-color:#4b0082;color:white;padding: 0 20px;'>
 <br>
 <p style='font-size:20px;width: 50%;margin: 0 auto;'><strong>Formulario de cliente</strong></p>
 <br>
 <br>
 <p>Nombre: " .htmlentities($nombre). "<p/><br>
 <p>Tel&eacute;fono: " .htmlentities($telefono). "<p/><br>
 <p>Comentario: " .htmlentities($comentario). "<p/><br>

</body>
</html>";
  
$mail->setFrom($correo, eliminar_acentos($nombre));
$mail->Subject = $asunto;
$mail->msgHTML($cuerpo);
//$mail->addAttachment('test.txt');


try {
   

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<div class='contenedor'>
          <p><img src='img/mensaje_enviado.png' alt='logo_mensaje' loading='lazy'><p/> 
          <br><br>
          <p>¡Urra! ¡El mensaje ha sido enviado con éxito!. Me pondré en contacto a la brevedad. </p>
          <button><a href='index.php'>VOLVER</a></button>
          </div>";
}
} catch (Exception $e) {
    echo "<div class='contenedor'>
    <p>¡OOPS! El mensaje no ha podido ser enviado. Por favor inténtalo nuevamente. </p>
    <button><a href='index.php'>VOLVER</a></button>
    </div>";
    $mail->ErrorInfo;
}
}
}elseif (isset($seccion) && !empty($seccion) && $seccion=="contrato"){
    if (isset($nombre)){

        $asunto= "Compra de $plan desde indigodigitalweb.com.ar";    
       
        $cuerpo = "<!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'> 
         <meta http-equiv='X-UA-Compatible' content='IE=edge'>
         <meta name='viewport' content='width=device-width, initial-scale=1.0'>
         </head>
        <body style='background-color:#4b0082;color:white;padding: 0 20px;'>
        <br>
        <p style='font-size:20px;width: 50%;margin: 0 auto;'><strong>Formulario de Compra</strong></p>
        <br>
        <br>
        <p>Plan: " .$plan. "<p/><br>
        <br>
        <p>Nombre: " .htmlentities($nombre). "<p/><br>
        <p>Correo: " .htmlentities($correo). "<p/><br>
        <p>Telefono: " .htmlentities($telefono). "<p/><br>
        <p>Calle: " .htmlentities($calle). "<p/><br>
        <p>Nro.: " .htmlentities($nro). "<p/><br>
        <p>Ciudad: " .htmlentities($ciudad). "<p/><br>
        <p>C&oacute;digo Postal: " .htmlentities($CP). "<p/><br>
        <p>Pcia.: " .htmlentities($pcia). "<p/><br>
        <p>Pa&iacute;s: " .htmlentities($pais). "<p/><br>
        <p>Comentario: " .htmlentities($comentario). "<p/><br>
       
       </body>
       </html>";
       
       $mail->setFrom($correo, eliminar_acentos($nombre));
       $mail->Subject = $asunto;
       $mail->msgHTML($cuerpo);
    //$mail->addAttachment('test.txt');
       
       try {
          
       
       if (!$mail->send()) {
           echo 'Mailer Error: ' . $mail->ErrorInfo;
       } else {
                 echo "<div class='contenedor'>
                 <p>¡Muchas gracias por comprar el $plan! ¡Me pondré en contacto a la brevedad!. </p>
                 <button><a href='index.php'>VOLVER</a></button>
                 </div>";
       }
       } catch (Exception $e) {
           echo "<div class='contenedor'>
           <p>'¡OOPS! El mensaje no ha podido ser enviado. Por favor inténtalo nuevamente. </p>
           <button><a href='index.php'>VOLVER</a></button>
           </div>";
           $mail->ErrorInfo;
       }
    }
}    

function eliminar_acentos($cadena){
		
   //Reemplazamos la A y a
   $cadena = str_replace(
   array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
   array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
   $cadena
   );

   //Reemplazamos la E y e
   $cadena = str_replace(
   array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
   array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
   $cadena );

   //Reemplazamos la I y i
   $cadena = str_replace(
   array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
   array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
   $cadena );

   //Reemplazamos la O y o
   $cadena = str_replace(
   array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
   array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
   $cadena );

   //Reemplazamos la U y u
   $cadena = str_replace(
   array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
   array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
   $cadena );

   //Reemplazamos la N, n, C y c
   $cadena = str_replace(
   array('Ñ', 'ñ', 'Ç', 'ç'),
   array('N', 'n', 'C', 'c'),
   $cadena
   );
   
   return $cadena;
}
*/ 
?>

</body>
</html>