
<?php
session_start();

if(!isset($_SESSION['rol'])){
    header('location: /CMTD/inicioSesion.php');
}else{
  if($_SESSION['rol']!=1){
    header('location: /CMTD/inicioSesion.php');
  }
}


$usuario2=$_SESSION['usuario'];


?>

<header>
  <LINK REL=StyleSheet HREF="css/estilo.css" TYPE="text/css" MEDIA=screen>
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
            <li><a href="">Configuración</a>
                <ul>
                    <li><a href="/CMTD/index.html">
                      <?php session_destroy(); ?>
                      Cerrar sesión</a></li>
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
          <section id="banner">
            <img src="img/banner.jpg">
            <div class="contenedor">
              <center><h2>Control de Métodos de Titulación Dígitales</h2>
                <p>Universidad Aútonoma de Tlaxcala</p></center>
              </div>
            </section>

            <section id="infoBien">
              <br><br>
              <?php
              include("con_db.php");
              $get_Mat="SELECT * FROM alumno where Matricula='$usuario2'";
              $result=mysqli_query($conex,$get_Mat);
              $row=$result->fetch_array();
              $mat=$row['NombreAlumno'];
               ?>
              <h4>Bienvenido       <?php echo $mat; ?>        </h4><br>
              <center>

                <?php if(isset($_GET['m'])) : ?>
                  <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
                <?php endif; ?>
                <script src="js/jquery-3.6.0.min.js"></script>
                <script src="js/sweetalert2.all.min.js"></script>

                <script>
                ///
                const flashdata=$('.flash-data').data('flashdata')
                if (flashdata==2) {
                  Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Metodo guardado con exito en proceso de aceptación',
                    showConfirmButton: false,
                    timer: 2000
                  })

                }
                </script>






              </center>
              <br><br><br><br>




            </section>


          </main>

          <footer>
            <div class="contenedor">
              <p class="copy">CMTD UATX FBIY</p>
              <div class="sociales">
                <a class="fontawesome-facebook-sign" href="#"></a>

                <a class="fontawesome-google-plus-sign" href="#"></a>
              </div>
            </div>
          </footer>
