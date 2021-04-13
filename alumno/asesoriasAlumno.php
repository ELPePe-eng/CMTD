<?php
include('con_db.php');
$usu=$_GET['variable'];  $usuario2=$usu;
$query = "SELECT * FROM asesorias WHERE Matricula = $usu and realizadaA=0";
$result = mysqli_query($conex, $query);


$queryJ= "SELECT D.Nombre,D.ApellidoP,D.ApellidoM, ASE.Dia, ASE.Hora, ASE.Matricula,ASE.NoEmpleado,ASE.realizada From docente D
INNER JOIN asesorias ASE where $usu=ASE.Matricula and ASE.realizadaA = 0 ORDER BY ASE.Dia ";
$resultado=mysqli_query($conex,$queryJ);
$row2=$resultado->fetch_array();
if(mysqli_num_rows($resultado)>0){
$i=$row2['NoEmpleado'];
$d=$row2['Dia'];
}
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
              <center>
              <div class="container">
              <div class="calendar light">
                <div class="calendar_header">


                </div>
                <div class="calendar_plan">
                  <div class="cl_plan">
                    <div class="cl_title">Calendario</div>
                    <div class="cl_copy">Asesorias</div>

                  </div>
                </div>
                <div class="calendar_events">
                  <p class="ce_title">Proximas asesorias</p>
                  <?php
                  if(mysqli_num_rows($result)==false){
                  echo "sin asesorias ";
                  }

                  if(mysqli_num_rows($result)>0){
                  while ($row=$result->fetch_array()){
            echo "<a href='AsesoriasAlumno2.php?variableD=".$d."&variableid=".$i."&variable=".$usu."'>
                <div class='event_item'>
                  <div class='el_Dot'></div>
                  <div class='ei_Title'>";echo " <h5>Hora:</h5>".$row['Hora'];"</div><br>
                  <div class='ei_Copy'><br>";echo " <h5>Dia:</h5>".$row['Dia'];"</div>
                </div>
              </a>";
              }
            }
              ?>
                </div>
              </div>
            </a>
              </section>

              <?php if(isset($_GET['firmar'])) : ?>
                <div class="flash-data2" data-flashdata2="<?= $_GET['firmar']; ?>"></div>
              <?php endif; ?>
              <script src="js/jquery-3.6.0.min.js"></script>
              <script src="js/sweetalert2.all.min.js"></script>

              <script>
              ///
              const flashdata2=$('.flash-data2').data('flashdata2')
              if (flashdata2==1) {
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'asesoria firmada con exito',
                  showConfirmButton: false,
                  timer: 3000
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
