<?php 
		date_default_timezone_set('MST7MDT');
		//$mail->SMTPDebug = 2;

		require './PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();

		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587; 
		$mail->SMTPSecure = 'tls'; 
		$mail->SMTPAuth = true; 
		$mail->Username = 'mdaemon207@gmail.com'; 
		$mail->Password = '*YOUR_PASSWORD_HERE*'; 

		$mail->addReplyTo($_POST['email'], $_POST['uname']);
		$mail->setFrom('robot@thriftopia.com', 'THRIFTOPIA MESSAGE'); // Set the sender of the message.
		$mail->addAddress('*YOUR_EMAIL_HERE*', 'THRIFTOPIA MESSAGE'); // Set the recipient of the message.

		$mail->Subject = $_POST['subject'];

		$mail->Body = $_POST['message'];

		if ($mail->send()) {
			echo "<script type='text/javascript'>alert('Message successfully sent, thanks for your feedback!'); 
			history.go(-1);</script>";
		} else {
			echo "<script type='text/javascript'>alert('There was an error sending your message. 
			You can contact us at fakeemail@thrifropia.com');
			history.go(-1);</script>";
		}	
?>