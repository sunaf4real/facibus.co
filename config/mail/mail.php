<?php
	  $array=$callclass->_get_backend_settings_detail($conn, 'BK_ID001');
	  $fetch = json_decode($array, true);
	  $smtp_host=$fetch[0]['smtp_host'];
	  $smtp_username=$fetch[0]['smtp_username'];
	  $smtp_password=$fetch[0]['smtp_password'];
	  $smtp_port=$fetch[0]['smtp_port'];
	  $sender_name=$fetch[0]['sender_name'];
	  $support_email=$fetch[0]['support_email'];
		$currentDate=date("l, d F Y");

		require 'mail/PHPMailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;
		$mail->SMTPDebug = 0;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = $smtp_host;  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $smtp_username;                 // SMTP username
		$mail->Password = $smtp_password;                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = $smtp_port;                                    // TCP port to connect to
		
		$mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
		);
		$mail->setFrom($smtp_username, $sender_name);

		$mail->WordWrap = 50;   
		$mail->isHTML(true);                                  // Set email format to HTML


?>


<?php 
if ($mail_to_send=='send_contact_email'){

$mail->addEmbeddedImage('mail/img/logo.png', 'logo');

$message='
<div style="width:90%; margin:auto; height:auto;">
<img src="cid:logo">
<div style="padding:15px; font-family:16px;">
<p>'.$message.'</p>
</div>
</div>
';
}
?>

<?php 
$mail->addAddress($support_email, $sender_name);// Name is optional
$mail->addAddress('afootechglobal@gmail.com', 'AfooTECH Global');// Name is optional
$mail->addReplyTo($smtp_username, $sender_name); // reply to the sender email

$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = strip_tags($message);

if(!$mail->send()){
	echo 'Not Working';
}

?>










