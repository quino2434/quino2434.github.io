<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Programación y diseño de páginas web optimizadas para todos los buscadores. Diseño web responsive y adaptabilidad a todos los dispositivos. PLANES ACCESIBLES."/>
    <meta name="keywords" content="programación, diseño responsivo, optimización, cración de imagenes vectoriales, planes accesibles, html, css, javascript, php, mysql"/>
    <link rel="icon" type="image/x-icon" href="img/icono_buting.png">
    <link rel="stylesheet" href="css/styles.css">
    <script src="jquery/jquery3.60.js"></script>
    <script src="js/main.js"></script>
    <title>Página principal | indigodigitalweb.com.ar</title>
</head>
<body>
   
    <header class="transparente">
        <a href="index.php"><img src="img/logo_indigo_sf.png" alt="logo_brand"></a>
        <nav>
            <a href="index.php" class="activo">Inicio</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>
 <div class="hero">
       <div></div>
       <div></div>
      <!-- <div class="hero-logo">
          <img src="img/logo_indigo.png" alt="logo Indigo Digital">
       </div>
        <a href="#" class="hero-down">
            <img src="img/down.png" alt="flecha abajo">
        </a> -->
    </div>  
    <div id="burger">
        <div class="barra superior"></div>
        <div class="barra media"></div>
        <div class="barra inferior"></div>
    </div>
     
       <div class="menu" id="menu">
           <nav id="navegacionLateral">
               <a href="inicio.php">Inicio</a>
               <hr>
               <a href="contacto.php">Contacto</a>
           </nav>
       </div>
      <span class="topeTransparente"></span>
     <div class="contMargenes">
      
      <div class="parallax1">
      <p class="titulo1 trasladarTitulo" id="titulo1"> <strong> Tecnologías utilizadas para tu página web</strong></p>
      <div class="articulo1" id="pr">
       
        <div class="col-33-1"> 
            <img src="img/logo_html.png" alt="img_html" loading="lazy">
            <p>HTML5</p>
        </div>
        <div class="col-33-2">
            <img src="img/logo_css.png" alt="img_css" loading="lazy">
            <p>CSS3</p>
        </div>
        <div class="col-33-3">
            <img src="img/logo_js.png" alt="img_js" loading="lazy">
            <p>Javascript</p>
        </div>
      </div>
      
      <p class="descripcion" id="descripcion1">Para que pueda ver el sitio web publicado en internet, primero se debe codificar la 
          estructura del sitio y junto a ello el diseño que se mostrará posteriormente. Para desarrollar la
          estructura web de su página se utiliza HTML5, para el diseño CSS3 y para darle efectos agradables a la vista Javascript. 
      </p>
    </div>
      <span class="topeDescripcion"></span>
      <div class="parallax2">
      <div id="articulo2">
        <div class="col2-50"> 
            <p id="pSe"> <strong> Diseño Web Responsivo</strong></p>
            <p>El diseño web responsivo o diseño web adaptable es una técnica que permite que un sitio web se pueda ver 
                en distintos dispositivos móviles como celulares, tablets y notebook, para que la experiencia de navegación
                sea más eficiente.
            </p>
        </div>
        <div class="col2-50-2">
            <img src="img/responsive.png" alt="img_responsive" loading="lazy">
        </div>
      </div>
      </div>
      
      <div class="parallax3">
      <div class="elastic" id="articulo3">
            <div class="col3-50">
                <img src="img/seo.png" alt="img_seo" loading="lazy">
            </div>
            <div class="col3-50-2"> 
                <p class="elastic" id="pTe"> <strong>Posicionamiento en Buscadores</strong></p>
                <p>Para que su sitio web pueda ser visible en internet, se utilizan las técnicas de posicionamiento web en motores de 
                   búsqueda como Google, yahoo y Bing, logrando que su sitio destaque entre las primeras posiciones 
                   de los resultados de búsqueda y pueda atraer más clientes y hacer crecer su negocio. 
                </p>
            </div>
       </div>
      </div>
       <form id="frmContacto" name="frmContacto" action="contratacion.php" method="post">
       <div id="articulo4">
        <div class="col4-33-1">
            <p>PLANES</p>
        </div>
        
        <div class="col4-33-2">
            <div>
                <img src="img/bronce.png" alt="img_bronce" loading="lazy"> 
            </div>
           <p>Bronce</p>
           <p>$20000</p>
           <ul>
            <li>1 página 
                <span id="tooltipGen1">?</span>
                <div id="tooltip1">Las páginas o secciones son lo que tú ves cuando navegas, 
                 por ejemplo en este caso estás <br> navegando por la página 
                 de inicio de indigodigitalweb.com.ar.
                 Otras secciones que puede <br>
                 incluir tu página web pueden ser 'Inicio', 'Quienes somos', 'Contacto', etc. <br>
                </div>
           </li>
            <li>3 imágenes por página
                <span id="tooltipGen2">?</span>
                <div id="tooltip2"> Las imágenes por páginas o secciones son las que tú tienes <br>
                 para proveer de tu negocio que luego insertaré en tu web. <br>
                  Son la cantidad de imágenes máxima por página o sección. 
                </div>
            </li>
            <li>1 imágenes de stock opcionales 
                <span id="tooltipGen3">?</span>
                <div id="tooltip3"> Las imágenes de stock son imágenes que puedo ofrecerte a parte  <br>
                de las que ya tengas, o en caso de no tener es la cantidad máxima <br> que puedo ofrecerte. 
                La cantidad total de imágenes que dispongas  <br> más las de stock, no deben superar el máximo
                por página indicado <br> en el item anterior.
                </div>
            </li>
            <li>Portada 
            <span id="tooltipGen4">?</span>
                <div id="tooltip4"> La portada web se refiere a la imagen principal que se muestra en la parte  <br>
                superior del sitio web y muestra información gráfica relevante del negocio.
                </div>
            </li>
            <li>Diseño responsivo 
            <span id="tooltipGen5">?</span>
                <div id="tooltip5"> El diseño responsivo es la adaptabilidad del sitio web a diferentes dispositivos <br>
                móviles.
                </div>
            </li>
            <li>Posicionamiento SEO 
            <span id="tooltipGen6">?</span>
                <div id="tooltip6"> El posicionamiento SEO es una técnica que permite que su sitio web destaque entre <br>
                las primeras posiciones de los motores de búsqueda como Goolge, Yahoo, Bing, etc.
                </div>
            </li>
            <li>Galería de fotos 
            <span id="tooltipGen7">?</span>
                <div id="tooltip7"> Se utiliza para mostrar imágenes deslizables que muestren productos, servicios, ideas <br>
                u alguna otra información de interés. <strong>Esta opción solo está disponible en planes <br>
                 superiores.</strong>
                </div>
            </li>
            <li>Edición de imágenes digitales 
            <span id="tooltipGen8">?</span>
                <div id="tooltip8"> En caso de que prefiera un retoque fotográfico de alguna imágen que irá en la web, <br>
                puedo añadir ese trabajo por usted (Consultar cantidad de imágenes por páginas y <br>
                imágenes de stock de puntos anteriores). <strong>Esta opción solo está disponible en planes <br>
                 superiores.</strong>
                </div>
            </li>
            <li>Diseño corporativo 
            <span id="tooltipGen9">?</span>
                <div id="tooltip9">  El Diseño Corporativo representa la identidad visual de una empresa, en el que se <br>
                define la imagen, la comunicación de la imagen y la personalidad. <br>
                 <strong>Esta opción solo está disponible en planes superiores.</strong>
                </div>
            </li>
            <li>Soporte vía chat
            <span id="tooltipGen10">?</span>
                <div id="tooltip10">  Ofrezco soporte vía chat en caso de que así lo requiera, atendiendo sus dudas y requerimientos. <br>
                <strong>Esta opción solo está disponible en planes superiores.</strong>    
            </div>
            </li>
            </ul>
            <div class="propBoton">
            <input type="submit" id="planBronce" name="planBronce" value="CONTRATAR" value="planBronce">
            </div>
        </div>
        <div class="col4-33-3"> 
            <div>
                <img src="img/plata.png" alt="img_plata" loading="lazy"> 
            </div>
            <p>Plata</p>
            <p>$30000</p>
           <ul>
            <li>3 páginas</li>
            <li>5 imágenes por página</li>
            <li>3 imágenes de stock opcionales</li>
            <li>Portada</li>
            <li>Diseño responsivo</li>
            <li>Posicionamiento SEO</li>
            <li>Galería de fotos</li>
            <li>Edición de imágenes digitales</li>
            <li>Diseño corporativo</li>
            <li>Soporte vía chat</li>
           </ul>
           <div class="propBoton">
           <input type="submit" id="planPlata" name="planPlata" value="CONTRATAR"  value="planPlata">
        </div>
        </div>
        <div class="col4-33-4"> 
            <div>
                <img src="img/oro.png" alt="img_oro" loading="lazy"> 
            </div>
            <p>Oro</p>
            <p>$50000</p>
           <ul>
            <li>7 páginas</li>
            <li>10 imágenes por página</li>
            <li>5 imágenes de stock opcionales</li>
            <li>Portada</li>
            <li>Diseño responsivo</li>
            <li>Posicionamiento SEO</li>
            <li>Galería de fotos</li>
            <li>Edición de imágenes digitales</li>
            <li>Diseño corporativo</li>
            <li>Soporte vía chat</li>
           </ul>
           <div class="propBoton">
           <input type="submit" id="planOro" name="planOro" value="CONTRATAR"  value="planOro">
        </div>
        </div>
</form>
       </div>
       <p class="pQui"> <strong>Medios de comunicación</strong></p>
       <div id="articulo5">
        <div class="col5-50"> 
            <img src="img/llamada.png" alt="img_llamada" loading="lazy">
            <img src="img/mensaje.png" alt="logo_mensaje" loading="lazy">
          
        </div>
        <div class="col5-50-2">
            <p>Nos comunicamos, me comentas cómo es tu negocio, cómo te gustaría la página web  y juntos lo vamos viendo :)</p>
            <div>
                <button><a href="contacto.php">CONTACTO</a></button> 
            </div>
           
        </div>
      </div>
    </div>
      <footer>
        <div class="contFooter">
          <div  class="col6-33-1">
            <p>Enlaces</p>
            <ul class="listLink">
                <li><a href="index.php">Inicio</a></li>
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