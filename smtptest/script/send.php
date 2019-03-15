<?php

require_once('class.phpmailer.php');





$mail = new PHPMailer(true);



$mail->IsSMTP(); // telling the class to use SMTP



try {

  //$mail->Host       = "smtp.gmail.com"; // SMTP server

  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)

  $mail->SMTPAuth   = true;                  // enable SMTP authentication

  $mail->Host       = "smtp.gmail.com"; // sets the SMTP server

  $mail->Port       = '587';                    // set the SMTP port for the server

  $mail->SMTPSecure = 'TLS';

  $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );

  $mail->Username   = "info@onlytickets.in"; // SMTP account username

  $mail->Password   = "yXySs1z3KBSt";        // SMTP account password

  $mail->AddReplyTo('info@onlytickets.in', 'First Last');

  $mail->AddAddress('mayankgajjar888@gmail.com', 'John Doe');

  $mail->SetFrom('info@onlytickets.in', 'First Last');

  //$mail->AddReplyTo('name@yourdomain.com', 'First Last');

  $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';

  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically

  $mail->MsgHTML("<h1>Hi</h1>");

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

