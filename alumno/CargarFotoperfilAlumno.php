
<?php
include('con_db.php');
$usu=$_GET['variable'];
$usuario2=$usu;
$query = "SELECT * FROM alumno WHERE Matricula = $usu";
$result = mysqli_query($conex, $query);
$row=$result->fetch_array();
$ruta = $row['imagen'];
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
              <br><br>
              <h3>Foto de perfil</h3><br>
              <center>
                <fieldset id="fieldset3"><br>
                  <img src="<?php echo $ruta;?>" alt="" id="fotoPerfil"><br>
                  <form action="subirimagen.php?variable=<?php echo $usu ?>" method="POST" enctype="multipart/form-data">
                    <center>
                      <br>
                      <div class="custom-input-file col-md-6 col-sm-6 col-xs-6">

                        <h2>Seleccionar imagen</h2>
                        <input type="file"  class="input-file"  name="file">
                      </div>
                      <h6>.JPG, .JPEG, .PNG menor a 2MB</h6>
                      <br><br>
                      <h6>Selecciona una imagen presentable <br>y donde pueda observarse unicamente y de manera clara tu rostro.</h6>
                      <br><br>

                      <input type="submit" name="" value="Guardar">
                      <br><br>
                    </center>
                  </form>

                </fieldset>



              <br><br>




              </section>

              <?php if(isset($_GET['subimg'])) : ?>
                <div class="flash-data" data-flashdata="<?= $_GET['subimg']; ?>"></div>
              <?php endif; ?>
              <script src="js/jquery-3.6.0.min.js"></script>
              <script src="js/sweetalert2.all.min.js"></script>

              <script>
              ///
              const flashdata=$('.flash-data').data('flashdata')
              if (flashdata==2) {
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'La imagen Seleccionada pesa más de 2MB',
                  showConfirmButton: false,
                  timer: 2000
                })

              }else if (flashdata==3) {
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'La imagen se a subido exitosamente',
                  showConfirmButton: false,
                  timer: 2000
                })
              }else if (flashdata==4) {
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'La imagen no tiene el formato esperado',
                  showConfirmButton: false,
                  timer: 2000
                })
              }else if (flashdata==5) {
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'El archivo seleccionado no es una imagen',
                  showConfirmButton: false,
                  timer: 2000
                })
              }
              </script>


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
