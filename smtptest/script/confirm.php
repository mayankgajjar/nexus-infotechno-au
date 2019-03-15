<?php
require_once('class.phpmailer.php');

$mail = new PHPMailer(true);
#$mail->IsSMTP(); // telling the class to use SMTP
$mail->Mailer = "mail";

//$url = "https://onlytickets.in/forget_password/".$_REQUEST['token'];

$templ = file_get_contents('email_temp/confirm.php'); 
$templ = str_replace("#baner_image#", $_REQUEST['baner_image'], $templ);
$templ = str_replace("#order_id#", $_REQUEST['order_id'], $templ);
$templ = str_replace("#event_name#", $_REQUEST['event_name'], $templ);
$templ = str_replace("#event_time#", $_REQUEST['event_time'], $templ);
$templ = str_replace("#event_date#", $_REQUEST['event_date'], $templ);
$templ = str_replace("#event_time#", $_REQUEST['event_time'], $templ);
$templ = str_replace("#event_address#", $_REQUEST['event_address'], $templ);
$templ = str_replace("#total_amount#", $_REQUEST['total_amount'], $templ);
$templ = str_replace("#total_quantity#", $_REQUEST['total_quantity'], $templ);

try {   
  
    $mail->Host       = "smtp.gmail.com"; // SMTP server
    $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication

    $mail->SMTPSecure = "tls"; //ssl or tls
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; //465 or 587
    
    $mail->Username   = "info@onlytickets.in"; // SMTP account username
    $mail->Password   = "yXySs1z3KBSt";        // SMTP account password
    $mail->AddAddress($_REQUEST['email'], 'Onlytickets');
    $mail->SetFrom('info@onlytickets.in', 'Your booking is confirmed!');
    $mail->AddReplyTo('info@onlytickets.in', 'Your booking is confirmed!');
    $mail->Subject = 'Your booking is confirmed!';
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
