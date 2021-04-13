<?php $usu=$_GET['variable'];  $usuario2=$usu;?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <LINK REL=StyleSheet HREF="css/estilo.css" TYPE="text/css" MEDIA=screen>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <div class="contenedormenu">
        <h1>CMTD</h1>
        <input type="checkbox" id="menu-bar">
        <label class="fontawesome-align-justify" for="menu-bar"></label>
        <nav class="menu">
          <div id="header">
            <ul class="nav">
              <li><a>Control de tramite</a>
                  <ul>
                    <li><a href="Elegir_metodo_titulacion.php?variable=<?php echo $usuario2;?>">Elegir metodo de titulación</a></li>
                    <li><a href="tecnicas_investigacionAlumno.php?variable2=<?php echo $usuario2;?>">Tecnicas de investigación</a></li>
                    <li><a href="cargarCapitulo1.php?variable=<?php echo $usuario2;?>">Cargar capitulo 1</a></li>
                    <li><a href="cargaDocCompleto.php?variable=<?php echo $usuario2;?>">Cargar documento completo</a>
                  </ul>
              </li>
              <li><a href="">Formatos</a>
                  <ul>
                    <li><a href="formSolicitudAceptacion.php?variable=<?php echo $usuario2;?>">Solicitud de aceptación</a></li>
                    <li><a href="formAprobacionCuartillas.php?variable=<?php echo $usuario2;?>">Aprobación de cuartillas.</a></li>
                    <li><a href="formControlTramite.php?variable=<?php echo $usuario2;?>">Control de trámite</a>
                    <li><a href="formConclusionAsesorias.php?variable=<?php echo $usuario2;?>">Conclusión de asesorías</a>
                  </ul>
              </li>
              <li><a href="asesoriasAlumno.php?variable=<?php echo $usuario2;?>">Asesorias</a></li>
                <li><a href="bibliotecaAlumno.php?variable=<?php echo $usuario2;?>">Biblioteca</a></li>
              <li><a href="inicioAlumno.php">
              <?php session_start(); $_SESSION['rol']=1; $_SESSION['usuario']=$usu;?>
                Inicio</a></li>
              <li><a href="">Configuración</a>
                  <ul>
                      <li><a href="/CMTD/index.html">Cerrar sesión</a></li>
                      <li><a href="editarPerfilAlumno.php?variable=<?php echo $usuario2;?>">Editar perfil</a></li>
                      <li><a href="politicaDatos.php?variable=<?php echo $usuario2;?>">Politica de datos</a></li>
                  </ul>
             </li>

                    <li id="not"><a href="notificacionAlumno.php?variable2=<?php echo $usuario2;?>"><img src="img/notificacion.png" width="5%" alt=""></a></li>
                  </ul>
                </div>
              </nav>
          </div>
          </header>

          <main>
            <br><br>


            <section id="infoBien">
              <center>

<br><br><br>
<b>POLITICA DE DATOS</b><BR>
                <fieldset id="fieldset3"><br>
                  <center>

              <p id="justificado">
                Los presentes Términos y Condiciones, en lo sucesivo TÉRMINOS, regulan el acceso, participación, uso y manejo de la información, datos y servicios actuales resultantes que ofrece CMTD a través de su plataforma tecnológica.

Todo USUARIO  que pretenda acceder y utilizar los servicios de CMTD, acepta y se obliga de conformidad con los lineamientos siguientes, Usted está sujeto a toda regla o guía de uso de los servicios de CMTD.

POR FAVOR LEA CON DETENIMIENTO SI HACE USO DE CMTD.

Si no aceptas los presentes TÉRMINOS, no podrás utilizar los servicios de CMTD.

<br>

Los presentes TÉRMINOS, regulan su acceso y uso de los servicios entre Usted y los demás usuarios y convienen en vincularse a través del presente en el territorio que comprende en los Estados Unidos Mexicanos (México).

Al aceptar estos TÉRMINOS, Usted se obliga en cumplirlos y ejecutarlos, CMTD, podrá denegar el acceso a su cuenta y los servicios, sin perjuicio alguno, si se detecta que Usted no cumple con los presentes lineamientos.

Se entiende por aceptadas estos TÉRMINOS al momento que el USUARIO, utilice la plataforma de CMTD por primera vez.


La relación entre CMTD y el USUARIO es una bajo un esquema en la cual, el sistema podrá ofrecer los servicios tecnológicos para el control de método de titulación en la Plataforma de CMTD. El USUARIO y CMTD NO tienen ningún vínculo laboral o de responsabilidad social y civil.
      <br><br>En este acto, CMTD proporciona el uso limitado, no sublicenciable, no transferible y revocable para el USUARIO, el cual, sólo podrá reproducirse en su dispositivo móvil o cualquier medio electrónico autorizado por CMTD.

Queda entendido, que todos los SERVICIOS que ofrece CMTD serán de uso personal y de ninguna manera podrá ser utilizado de manera comercial por alguna Persona Jurídica Colectiva o Física, distinta a CMTD o cualquiera de sus subsidiarias o filiales.    </p>
                </fieldset>



              <br><br>




              </section>


            </main>
<br><br><br>
            <footer>
              <div class="contenedor">
                <p class="copy">CMTD UATX FBIY</p>
                <div class="sociales">
                  <a class="fontawesome-facebook-sign" href="#"></a>

                  <a class="fontawesome-google-plus-sign" href="#"></a>
                </div>
              </div>
            </footer>


          </body>
          </html>
