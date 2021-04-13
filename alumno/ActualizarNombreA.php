<?php
include('con_db.php');

$matricula = $_GET['matricula'];
$nombre = $_POST['nombre'];
$ap = $_POST['ap'];
$am = $_POST['am'];

$sql="UPDATE alumno SET  NombreAlumno = '$nombre', ApellidoPaterno = '$ap', ApellidoMaterno = '$am'
            WHERE Matricula='$matricula'";
$result=mysqli_query($conex,$sql);

header("location:EditarPerfilAlumno.php?variable=$matricula&actuname=1");

 ?>
