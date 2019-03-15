<?php
require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("vendor/phpmailer/phpmailer/src/SMTP.php");
require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();        
//Set SMTP host name                      
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;

$mail->Username = "nexusinfotechnoau@gmail.com";             
$mail->Password = "nexusinfotech";

//From email address and name
$mail->From = "nexusinfotechnoau@gmail.com";
$mail->FromName = "Nexus Infotechno Inc";

//To address and name
//$mail->addAddress("recepient1@example.com", "Recepient Name");
$mail->addAddress("mayankgajjar888@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
//$mail->addReplyTo("reply@yourdomain.com", "Reply");

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}