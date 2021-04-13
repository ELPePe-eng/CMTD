<?php
include('con_db.php');
$usu=$_GET['variable'];
$usuario2=$usu;


$query = "SELECT * FROM alumno WHERE Matricula = $usu";
$result = mysqli_query($conex, $query);
$row=$result->fetch_array();
$correo = $row['Correo'];

?>
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
              <br><br><br>
              <h3>Editar correo electronico</h3><br>
              <center>



                <fieldset id="fieldset3"><br>
                  <form class="" action="mensajeCorreo.php?variable=<?php echo $usu; ?>" method="post">


                    <center>
                      <br>
                    Antiguo:<br><br>
                    <input type="text" name="" value="<?php echo $correo; ?>"><br><br>
                    Nuevo:<br><br>
                    <input type="text" name="email" value=""><br><br>

                    <h6>Se cerrara la sesion y se enviara un mensaje a tu<br>nuevo correo electronico.<br></h6>
<br><br>
                    <input type="submit" name="" value="Enviar correo"><br><br>




                      <br><br>
                    </center>
                  </form>

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
