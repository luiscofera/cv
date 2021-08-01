<!DOCTYPE html>

<head>
    <title>OSHA</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php 

	
	
    $nombre_curso = "asdasdasd";
    $id_usuario = 12;
    $nota = 22;
		$nombres = "asdasd";
		$apellidos = "asdasdasd";
		$email = "luis.cofera@gmail.com";
		
	
	$to = 'luis.cofera@gmail.com';

	$subject = "OSHA.ES - EXAMEN APROBADO - ".$nombre_curso;

	$headers = "From: " . $to . "\r\n";
	$headers .= "Reply-To: ". $to . "\r\n";
	$headers .= "CC:" . $to . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	$message = '<!DOCTYPE html>
	<html>
	<head>
	<style>
	#customers {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}
	</style>
	</head>
	<body>
    <h3>'.$nombre_curso.'</h3>
	<table id="customers">
	  <tr>
		<th>Dato</th>
		<th>Valor</th>
	  </tr>
	  <tr>
		<td>ID USUARIO:</td>
		<td>'.$id_usuario.'</td>
	  </tr>
	  <tr>
		<td>Puntaje:</td>
		<td>'.$nota.'</td>
	  </tr>
	  <tr>
		<td>Nombres:</td>
		<td>'.$nombres.'</td>
	  </tr>
	  <tr>
		<td>Apellidos:</td>
		<td>'.$apellidos.'</td>
	  </tr>

	  <tr>
		<td>Email</td>
		<td>'.$email.'</td>
	  </tr>
	</table>

	</body>
	</html>
	';


	if(mail($to, $subject, $message, $headers)){
		echo "correo enviado a ".$email;
		// echo '<script>
		//     swal({
  //                 title: "Ennviar solicitud para certificación",
  //                 text: "Recuerde, para poder solicitar su certificación debe de haber hecho el pago vía Paypal.",
  //                 icon: "warning",
  //                 buttons: true,
  //                 dangerMode: true,
  //               })
  //               .then((willDelete) => {
  //                 if (willDelete) {
  //                   swal("Mensaje enviado!", {
  //                     icon: "success",
  //                   });
  //                   window.location.replace("https://www.osha.es/cursos");
  //                 } else {
  //                   swal("Comprueb bien sus datos");
  //                 }
  //           });
  //       </script>';
        
	}else{
		echo "mensaje no enviado";
	}
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
