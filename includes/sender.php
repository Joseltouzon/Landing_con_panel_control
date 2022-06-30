<?php
	// incluye las funciones de envio  

	function valida_captcha($captcha, $validacion){
		switch($captcha){
            case 1:
                if($validacion==4){$valida="ok";}
                break;
            case 2:
                if($validacion==7){$valida="ok";}
                break;
            case 3:
                if($validacion==8){$valida="ok";}
                break;
		}

        return $valida;
	}


	function captcha(){
		$r = rand(1,3);
	    switch($r){
	        case 1:
	            $captcha= " 1 + 3 ";
	            break;
	        case 2:
	            $captcha= " 3 + 4 ";
	            break;
	        case 3:
	            $captcha= " 5 + 3 ";
	            break;
	    }
	    return $captcha;
	}


	function sender($to, $from, $body, $subject, $ok, $error, $smtpHost, $smtpUsuario, $smtpClave ){
		
        // Email donde se enviaran los datos cargados en el formulario de contacto
        

        
        $emailDestino = $to;
        

        $mail = new PHPMailer();
        
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Port = 465; 
        $mail->SMTPSecure = 'ssl';
        $mail->IsHTML(true); 
        $mail->CharSet = "utf-8";


        // VALORES A MODIFICAR //
        $mail->Host = $smtpHost; 
        $mail->Username = $smtpUsuario; 
        $mail->Password = $smtpClave;

        $mail->From = $from; // Email desde donde envío el correo.
        $mail->FromName = $from;
        $mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario
        
        $mail->Subject = $subject; // Este es el titulo del email.
        
        $mensajeHtml = $body;
        $mail->Body = "{$mensajeHtml} <br /><br />".$subject; // Texto del email en formato HTML
        $mail->AltBody = "{$mensaje} \n\n ".$subject; // Texto sin formato HTML
        // FIN - VALORES A MODIFICAR //
        //$mail->SMTPDebug  = 2; 
        $estadoEnvio = $mail->Send(); 


        if($estadoEnvio){
             $mensaje = $ok;
        } else {
            $mensaje = $error;
        }
		return $mensaje;
	}
	
	
?>
