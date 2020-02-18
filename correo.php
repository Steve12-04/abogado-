<?php
if (isset($_POST['enviar'])) {
	if(!empty($_POST['fname'])  && !empty($_POST['lname']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
	    //definiendo variables
		$nombre= $_POST['fname'];
		$apellido=$_POST['lname'];
		$telefono=$_POST['phone'];
		$correo=$_POST['email'];
		$tema=$_POST['subject'];
		$mensaje=$_POST['message'];
		//definiendo usuario
		$usuario=$nombre." ".$apellido;
		//definiendo el mensaje
		$mensajecompleto="El tema es: ".$tema."\nEl mensaje es: ".$mensaje."\nEl cliente es: ".$usuario."\nEl telefono es: ".$telefono."\nEl correo es: ".$correo;


        //definiendo el correo
		$email="bryan_s_gs@hotmail.com";
		//colocar desde que lugar lo envias
		$header="From: abogadol" . "\r\n";
		//colocar a que lugar lo envias
		$header.="Reply-To: $email" . "\r\n";
		//codigo necesario
		$header.="X-Mailer: PHP/".phpversion();
		$mail= @mail($email, $usuario, $mensajecompleto, $header);
		if ($mail) {
			echo "<script>
            alert('Felicidades el mensaje fue enviado exitosamente');
            </script>";
        
		}
	}else{
    echo "<script>
    alert('Ocurrio un error por favor ingresar nuevamente el contenido');
    </script>";
    }
}
?>