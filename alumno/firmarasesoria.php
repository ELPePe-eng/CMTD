<?php
include('con_db.php');
$matricula = $_GET['variable'];
$dia = $_GET['variable2'];

$sql="UPDATE asesorias SET  realizadaA='1' WHERE Matricula='$matricula' and Dia='$dia'";
$result=mysqli_query($conex,$sql);
header("location:/CMTD/alumno/asesoriasAlumno.php?firmar=1&variable=$matricula");
 ?>
