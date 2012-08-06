<?
session_start();

// edit these 3 items
$sendTo  =  "cei-moncloa@rect.ucm.es";  // your email - should be the same as the server domain
//$sendTo = "nmartin@pas.ucm.es";
$copia_oculta = "abanet@pas.ucm.es";
$subjectPre = "Pregunta desde el web: "; // a 'prefix' for the subject
$msg = "Su mensaje ha sido enviado."; // your thank you message

function spamcheck($field){
	//filter_var() sanitizes the e-mail address using FILTER_SANITIZE_EMAIL
	$field=filter_var($field, FILTER_SANITIZE_EMAIL);
	//filter_var() validates the e-mail address using FILTER_VALIDATE_EMAIL
	if(filter_var($field, FILTER_VALIDATE_EMAIL)){
		return TRUE;
	} else {
		return FALSE;
	}
}

//check if the email address is invalid
$mailcheck = spamcheck($_POST["email"]);
if ($mailcheck==FALSE) {
	$msg = "Campo E-mail incorrecto.";
} else {//send email
	// No need to edit this unless your form has a different name for the subject, email and message form fields
	$subject = utf8_decode($_POST["subject"]);
	$headers = "From: " . utf8_decode($_POST["name"]);
	$headers .= "<" . $_POST["email"] . ">\r\n";
	$headers .= "Bcc: " . $copia_oculta . "\r\n";
	$headers .= "Reply-To: " . $_POST["email"] . "\r\n";
	$headers .= "Return-Path: " . $_POST["email"];
	$message = utf8_decode($_POST["message"]);
	
	foreach($_POST as $k=>$v){
		switch($k){
			case "subject":
			case "message":
			case "email":
			case "submit":
			case "onHTTPStatus":
				// don't add these to the message
			break;
			default:
				// do add any other posted items to the message
				$message .= "\r\n". $k .":  ". utf8_decode($v) ;
			break;
		}
	}
	
	$mailSent = mail($sendTo, $subject, $message, $headers); 
}

echo "&returnMessage=$msg"; 
?>