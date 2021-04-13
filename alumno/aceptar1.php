<?php
include("con_db.php");
$id=$_GET['u'];

$datos="SELECT * FROM notificaciones where id_Emisor='$id' and T_Not='1'";
$resultD=mysqli_query($conex,$datos);
$row=$resultD->fetch_array();
$idD=$row['id_Receptor'];



  $sql="UPDATE notificaciones SET  confirma='1' WHERE id_Receptor='$idD' and T_Not= '1'";
  $result=mysqli_query($conex,$sql);

  header("location:notificacionAlumno.php?variable2=$idD");

 ?>
