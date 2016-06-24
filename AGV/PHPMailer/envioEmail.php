<?php
	require 'PHPMailer-master/PHPMailerAutoload.php';

	function sendEmailNewUser($name,$email,$password){

		//$mail->IsSMTP();
		$mail             	= new PHPMailer();
		$send_email 		= Bool;
		$body             	= "Hola Bienvenido ".$name."<BR>su contraseña es: ".$password;
		$mail->Host       	= "SymplyColors.com."; // SMTP server
		$mail->SMTPDebug  	= 0;
		$mail->SMTPAuth   	= true;
		$mail->Host       	= "agvcontacto@gmail.com";
		//$mail->Port       = 26;
		//$mail->Username   = "yourname@yourdomain";
		//$mail->Password   = "yourpassword";         
		$mail->SetFrom('agvcontacto@gmail.com', 'SympleColors');
		$mail->Subject    = "Nuevo Usuario";
		$mail->MsgHTML($body);

		$address = $email;
		$mail->AddAddress($address, $name);

		if(!$mail->Send()) {
		 	$send_email = false;
		} else {
		 	$send_email = true;
		}
		return $send_email;
	}

	if(sendEmailNewUser("SymplyColors","agvcontacto@gmail.com","password")){
		echo "YES";
	}else{
		echo "NO";
	}
        
        
        