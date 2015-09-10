<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from = "from@email.com";
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Mailer = "smtp";
$mail->Host       = "tls://smtp.gmail.com"; // Amazon SES server, note "tls://" protocol
$mail->Port       = 465;                    // set the SMTP port
$mail->Username   = "sushantjadhav2010@gmail.com";  // SES SMTP  username
$mail->Password   = "9096098525";  // SES SMTP password
$mail->SetFrom($from, 'ENQUIP');
$mail->AddReplyTo($from,'sushantjadhav2010');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);

if(!$mail->Send())
return false;
else
return true;

}
?>