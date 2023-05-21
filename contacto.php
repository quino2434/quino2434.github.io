<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/icono_buting.png">
    <link rel="stylesheet" href="css/stylesContact.css">
    <script src="jquery/jquery3.60.js"></script>
    <script src="js/main.js"></script>
    <title>contacto | indigodigitalweb.com.ar</title>
</head>
<body>
<header>
<a href="index.php"><img src="img/logo_indigo_sf.png" alt="logo_brand"></a>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="contacto.php" class="activo">Contacto</a>
        </nav>
    </header>
   
    <div id="burger">
        <div class="barra superior"></div>
        <div class="barra media"></div>
        <div class="barra inferior"></div>
    </div>
     
       <div class="menu">
           <nav>
               <a href="inicio.php">Inicio</a>
               <hr>
               <a href="contacto.php">Contacto</a>
           </nav>
       </div>
     
       <div class="contMargenes">
       <p class="titulo"><strong>Formulario de contacto</strong> </p>
            
       <div class="contForm">
           <form id="frmContacto" name="frmContacto" action="envio.php" method="post">
             <input type="text" id="inptNombre" name="inptNombre" placeholder="Nombre y Apellido" required>
             <input type="email" id="inptCorreo" name="inptCorreo" placeholder="Correo electrónico" required>
             <input type="text" id="inptTelefono" name="inptTelefono" placeholder="Teléfono" required>
             <input type="hidden" id="inptHidden" name="inptHidden" value="contacto">
             <textarea name="txtComentario" id="txtComentario"  placeholder="Comentarios" cols="40" rows="10" required></textarea>
             <div class="estiloBotones">
              <input type="submit" id="btnEnviar" name="btnEnviar" value="Enviar">
              <input type="reset" id="btnBorrar" name="btnBorrar" value="Borrar">
             </div>
            </form> 
       </div>
       </div>
       
       <footer>
        <div class="contFooter">
          <div  class="col6-33-1">
            <p>Enlaces</p>
            <ul class="listLink">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="Contacto.php">Contacto</a></li>
            </ul>
          </div>
          <div  class="col6-33-2">
              <p>Contacto</p>
              <ul class="listLink">
                  <li>Teléfono: +5492473418300</li>
                  <li>Email: contacto@indigodigitalweb.com.ar</li>
                </ul>
            </div>
            <div  class="col6-33-3">
              <p>Ubicación</p>
              <ul class="listLink">
                  <li>Colón, Buenos Aires, Argentina</li>
                  <li>Calle 42, Nro. 819</li>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.980520195178!2d-61.10803498507674!3d-33.890155527598225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b8105b34ccb687%3A0xb8d5c6f2aab2201f!2sC.%2042%20819%2C%20Col%C3%B3n%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1650399869832!5m2!1ses!2sar" 
                  width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </ul>
            </div>
        </div>
     
      </footer>   
  
</body>
</html>