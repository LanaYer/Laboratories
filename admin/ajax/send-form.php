<?PHP


	//$to = 'mailkomne@gmail.com';
	$to = 'danattias@yahoo.fr';
	$subject = 'Message de Biolab';
	$headers = 'From: info@appyside.com <info@appyside.com>' . "\r\n" .
		'Content-Type: text/html; charset=utf-8' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'X-Sender: info@appyside.com' . "\r\n" .
		'Reply-To: info@appyside.com' . "\r\n" .
		'X-Priority: 3 (Normal)' . "\r\n" .
		'X-Mailer: appyside.com';
	$template_mail = 'Message de Biolab:<br>'. "\r\n" .
	'Name: '.$_POST['iname'].'<br>'. "\r\n" .
	'Email: '.$_POST['iemail'].'<br>'. "\r\n".
	'Message: '.$_POST['imessage'].'<br>'. "\r\n";

	
	
	mail($to,$subject,stripcslashes($template_mail),$headers);
	echo 'Le message a été envoyé avec succès';
	

	//echo '<i class="icon-info-sign"></i> Ваше сообщение успешно отправлено.';
			
?>