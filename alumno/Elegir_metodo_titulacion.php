
<?php
$usu=$_GET['variable'];
$usuario2=$usu;
?>
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
                  <h3>Elección de metodo de titulación</h3><br>
                  <center>
                  <fieldset id="fieldset3">
                    <form action="/CMTD/php/E_Metodo.php" method="post">
                      <center>
                        <br>
                        Metodo de titulación <br><br>
                                  <select name="MetodoTitulacion" id="metodoT">
                                  <option value="tesis">Tesis</option>
                                  <option value="prototipo">Prototipo</option>
                                  <option value="memmoria">Memoria</option>
                                </select>
                                <br><br>
                        Tema<br><br>
                        <input type="text" name="tema" value=""><br><br>
                        Matricula<br><br>
                        <input type="number" name="matricula"
                        <?php
                        include("con_db.php");
                        $get_Mat="SELECT * FROM alumno where Matricula='$usu'";
                        $result=mysqli_query($conex,$get_Mat);
                        $row=$result->fetch_array();
                        $mat=$row['Matricula'];
                        ?>


                         value="<?php echo $mat;?>"><br><br>
                        Asesor <br><br>

                                  <select name="asesorElegido" id="asesor">


                                   <?php
                                   include("con_db.php");
                                   $get_Docentes="SELECT * FROM docente order by Nombre";
                                   $resultado=mysqli_query($conex,$get_Docentes);
                                   while ($row= mysqli_fetch_array($resultado)) {
                                     $NE=$row['No.Empleado'];
                                     $nombre = $row['Nombre'];
                                     $apellidoPa= $row['ApellidoP'];
                                     $apellidoMa=$row['ApellidoM'];
                                     ?>
                                     <option value="<?php echo $NE;?>">
                                       <?php
                                        echo $nombre." ".$apellidoPa." ".$apellidoMa;
                                        ?>
                                     </option>
                                     <?php
                                   }
                                    ?>

                                </select>



                                <br><br>
                              <h6>Una vez registrado estos datos, no podras realizar <br>cambios en ellos.<br> Acepto  <input type="checkbox" id="AceptoMT" name="AceptoMT"></h6>
                               <br><br>

          <input type="submit" name="" value="Guardar">
          <?php if(isset($_GET['m'])) : ?>
            <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
          <?php endif; ?>
          <script src="js/jquery-3.6.0.min.js"></script>
          <script src="js/sweetalert2.all.min.js"></script>

          <script>
          ///
          const flashdata=$('.flash-data').data('flashdata')
          if(flashdata==1){

              Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Ya tienes un Metodo asignado o se encuentra en proceso de aceptación',
                showConfirmButton: false,
                timer: 2000
              })

          }
          </script>


                        <br><br>
                      </center>
                    </form>

                  </fieldset>



                  <br><br><br><br><br><br><br><br>




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


  </body>
</html>
