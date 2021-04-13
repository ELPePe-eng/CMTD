<?php
 $usu=$_GET['variable2'];  $usuario2=$usu;
include("con_db.php");
$query="SELECT * FROM notificaciones where id_Receptor=$usu and confirma='0'";//consulta
$result=mysqli_query($conex,$query);

$query2="SELECT * FROM notificaciones where id_Receptor=$usu and confirma='1'";//consulta
$result2=mysqli_query($conex,$query2);
?>
<html lang="en" dir="ltr">
  <head>
        <LINK REL=StyleSheet HREF="css/estilo.css" TYPE="text/css" MEDIA=screen>
    <meta charset="utf-8">
    <script type="text/javascript">
     setTimeout("document.location=document.location",20000);
    </script>
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
                  <h3>Notificaciones</h3><br>
                  <center>
                  <fieldset id="fieldset3">

                      <center>
                        <br>

                        <?php

                       if(mysqli_num_rows($result)==false){
                       echo "Sin Notificaciones";

                       }


                        if(mysqli_num_rows($result)>0){
                        while ($row=$result->fetch_array()){

                       echo "<tr>

                       <td>";echo $row['mensaje'];"<br><br></td>";

                       echo "<td>

                       <a href='aceptar1.php?u=".$row['id_Emisor']."'> <img src='img/aceptar.PNG'
                       width='35' height='25'></a> </td>";



                       }
                       }
                       ?>

                       </table>


                        <br><br>




                      </center>

                  </fieldset>



                  <br><br><br><br><br><br><br><br>




                </section>


                <section id="infoBien">
                  <br><br>
                  <h3>Notificaciones Antiguas</h3><br>
                  <center>
                  <fieldset id="fieldset3">

                      <center>
                        <br>

                        <?php

                       if(mysqli_num_rows($result2)==false){
                       echo "Sin Notificaciones";

                       }


                        if(mysqli_num_rows($result2)>0){
                        while ($row2=$result2->fetch_array()){

                       echo "<tr>

                       <td>";echo $row2['mensaje'];"<br><br></td>";
                       }
                       }
                       ?>

                       </table>


                        <br><br>




                      </center>

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
