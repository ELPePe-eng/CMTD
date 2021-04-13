<?php
include('con_db.php');
$contra1 = trim($_POST['contra1']);
$contra2 = trim($_POST['contra2']);
$matricula = trim($_GET['variable']);


if($contra1 == $contra2){

  $sql="UPDATE alumno SET  contrasena = $contra1
              WHERE Matricula='$matricula'";
  $result=mysqli_query($conex,$sql);

  header("location:EditarPerfilAlumno.php?variable=$matricula&actupass=1");

}else {
  header("location:EditarClaveAlumno.php?variable=$matricula&actupass=2");
}




 ?>
