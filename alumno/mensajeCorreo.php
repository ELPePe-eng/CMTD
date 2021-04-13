<?php
include("con_db.php");
session_start();
//load and initialize user class
//$user = new User();
$email=trim($_POST['email']);
$matricula = trim($_GET['variable']);

$sql2="UPDATE alumno SET  Correo = '$email'
            WHERE Matricula='$matricula'";
$result2=mysqli_query($conex,$sql2);
/////////////////////////////////////////////
//////////////////////////////////////////////

    if(!empty($_POST['email'])){
         $sql="SELECT * From alumno
           where Correo='$email'";
         $result=mysqli_query($conex,$sql);

		if(mysqli_num_rows($result)> 0){
			//generat unique string



			//	$resetPassLink = 'http://localhost/CMTD/';


        $get_Alumno="SELECT * FROM alumno where Correo='$email'";
        $resultado=mysqli_query($conex,$get_Alumno);
        while ($row= mysqli_fetch_array($resultado)) {
          $Nombre=$row['NombreAlumno'];
          $apellidoPa= $row['ApellidoPaterno'];
          $apellidoMa=$row['ApellidoMaterno'];
        }
				//send reset password email
				$to = $email;
				$subject = "Nuevo Correo";
				$mailContent = 'Estimad@ '.$Nombre.',
				<br/><br/>Este correo es solo de aviso.
				<br/>Cambio de correo exitoso ya puedes iniciar tu sesion normalmente</a>
        <br/> Si no fuiste tu reportalo a este correo o con tu cordinador
				<br/><br/>Saludos,

                <br/>UATx CMTD "Por la Cultura, a la Justicia Social"
                <br/>';                ;

				//set content-type header for sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				//additional headers
				$headers .= 'From: uatxcmtd@gmail.com>' . "\r\n";
				//send email
				mail($to,$subject,$mailContent,$headers);
header('location: /CMTD/index.html');

   }


 }





        ?>
