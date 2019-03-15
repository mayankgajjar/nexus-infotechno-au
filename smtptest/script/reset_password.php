<?php
require_once('class.phpmailer.php');

$mail = new PHPMailer(true);
#$mail->IsSMTP(); // telling the class to use SMTP
$mail->Mailer = "mail";

$templ = file_get_contents('email_temp/reset.html'); 

try {
  
  $mail->Host       = "smtp.gmail.com"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication

  $mail->SMTPSecure = "tls"; //ssl or tls
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587; //465 or 587
  
  $mail->Username   = "info@onlytickets.in"; // SMTP account username
  $mail->Password   = "yXySs1z3KBSt";        // SMTP account password
  $mail->AddAddress('info@onlytickets.in', 'Onlytickets');
  $mail->SetFrom($_REQUEST['email'], 'Onlytickets');
  //$mail->AddReplyTo('info@onlytickets.in', 'First Last');
  $mail->Subject = 'Reset Password';
  //$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($templ);
  //$mail->AddAttachment('images/phpmailer.gif');      // attachment
  //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->Send();
    echo "Message Sent OK</p>\n";
  } catch (phpmailerException $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
  } catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
  }
?>
