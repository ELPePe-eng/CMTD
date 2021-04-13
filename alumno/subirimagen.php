<?php
include('con_db.php');
$matricula = $_GET['variable'];

$directorio = "fotos/";//ruta del archivo
$archivo = $directorio. basename($_FILES["file"]["name"]);//nombre del archivo
$destino = $archivo;
$tipoArchivo = mb_strtolower(pathinfo($archivo, PATHINFO_EXTENSION)); //tipo de archivo
$checarimagen  = getimagesize($_FILES["file"]["tmp_name"]);//validar que es imagen

  if($checarimagen != false){
      $size = $_FILES["file"]["size"];
      if ($size > 2000000) {
        header("location:CargarFotoperfilAlumno.php?variable=$matricula&subimg=2");
      }else {
        if ($tipoArchivo == "JPG" || $tipoArchivo == "JPEG" || $tipoArchivo == "PNG" || $tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png") {
          //valido
          if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){

            $query = "UPDATE alumno SET imagen='$archivo' where Matricula='$matricula'";
            $result=mysqli_query($conex,$query);
            header("location:CargarFotoperfilAlumno.php?variable=$matricula&subimg=3");

          }
        }else {
          header("location:CargarFotoperfilAlumno.php?variable=$matricula&subimg=4");
        }
      }
  }else {
    header("location:CargarFotoperfilAlumno.php?variable=$matricula&subimg=5");
  }




//var_dump($size); //informacion del archivo
//$query = "INSERT INTO alumno (imagen) values('$destino')";
//header("location:EditarPerfilAlumno.php?variable=$matricula&actuimg=1");

 ?>
