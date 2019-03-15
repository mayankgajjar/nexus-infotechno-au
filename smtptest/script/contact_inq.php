<?php

$type = $_REQUEST['type'];

if($type == 'contact_inquiry') {
    $name = $_REQUEST['txt_name'];
    $email = $_REQUEST['txt_email'];
    $message = $_REQUEST['txt_message'];    
    $contact = $_REQUEST['txt_contact'];
    $subject = $_REQUEST['txt_subject'];

    $templ = file_get_contents('email_temp/contact_inquiry.html'); 
    $templ = str_replace("#txt_name#", $name, $templ);
    $templ = str_replace("#txt_email#", $email, $templ);
    $templ = str_replace("#txt_contact#", $contact, $templ);
    $templ = str_replace("#txt_subject#", $subject, $templ);
    $templ = str_replace("#txt_message#", $message, $templ);
    $templ = str_replace("#txt_title#", 'We are getting new inquiry from contact!', $templ);
    $subject = "We are getting new inquiry from contact.";
}

if($type == 'quote_inquiry') {
    $name = $_REQUEST['qtxt_name'];
    $email = $_REQUEST['qtxt_email'];
    $message = $_REQUEST['qtxt_message'];

    $templ = file_get_contents('email_temp/quote_inquiry.html'); 
    $templ = str_replace("#txt_name#", $name, $templ);
    $templ = str_replace("#txt_email#", $email, $templ);
    $templ = str_replace("#txt_message#", $message, $templ);
    $templ = str_replace("#txt_title#", 'We are getting new inquiry from quote!', $templ);
    $subject = "We are getting new inquiry from quote.";
}

if($type == 'seo_inquiry'){
    $website = $_REQUEST['stxt_website'];
    $name = $_REQUEST['stxt_name'];
    $contact = $_REQUEST['stxt_contact'];
    $email = $_REQUEST['stxt_email'];

    $templ = file_get_contents('email_temp/seo_inquiry.html'); 
    $templ = str_replace("#txt_name#", $name, $templ);
    $templ = str_replace("#txt_email#", $email, $templ);
    $templ = str_replace("#txt_contact#", $contact, $templ);
    $templ = str_replace("#txt_website#", $website, $templ);
    $templ = str_replace("#txt_title#", 'We are getting new inquiry from seo!', $templ);
    $subject = "We are getting new inquiry from seo.";
}

if($type == 'design_inquiry'){
    $website = $_REQUEST['dtxt_website'];
    $name = $_REQUEST['dtxt_name'];
    $contact = $_REQUEST['dtxt_contact'];
    $email = $_REQUEST['dtxt_email'];

    $templ = file_get_contents('email_temp/seo_inquiry.html'); 
    $templ = str_replace("#txt_name#", $name, $templ);
    $templ = str_replace("#txt_email#", $email, $templ);
    $templ = str_replace("#txt_contact#", $contact, $templ);
    $templ = str_replace("#txt_website#", $website, $templ);
    $templ = str_replace("#txt_title#", 'We are getting new inquiry from graphic designer!', $templ);
    $subject = "We are getting new inquiry from graphic designer.";
}

if($type == 'app_inquiry'){
    $website = $_REQUEST['atxt_website'];
    $name = $_REQUEST['atxt_name'];
    $contact = $_REQUEST['atxt_contact'];
    $email = $_REQUEST['atxt_email'];

    $templ = file_get_contents('email_temp/seo_inquiry.html'); 
    $templ = str_replace("#txt_name#", $name, $templ);
    $templ = str_replace("#txt_email#", $email, $templ);
    $templ = str_replace("#txt_contact#", $contact, $templ);
    $templ = str_replace("#txt_website#", $website, $templ);
    $templ = str_replace("#txt_title#", 'We are getting new inquiry from App Developer!', $templ);
    $subject = "We are getting new inquiry from App Developer.";
}

if($type == 'betting_inquiry'){
    $name = $_REQUEST['etxt_name'];
    $contact = $_REQUEST['etxt_contact'];
    $email = $_REQUEST['etxt_email'];
    $company = $_REQUEST['etxt_company'];
    $country = $_REQUEST['etxt_country'];
    $state = $_REQUEST['etxt_state'];
    $message = $_REQUEST['etxt_message'];

    $templ = file_get_contents('email_temp/betting_inquiry.html'); 
    $templ = str_replace("#txt_name#", $name, $templ);
    $templ = str_replace("#txt_email#", $email, $templ);
    $templ = str_replace("#txt_contact#", $contact, $templ);
    $templ = str_replace("#txt_company#", $company, $templ);
    $templ = str_replace("#txt_country#", $country, $templ);
    $templ = str_replace("#txt_state#", $state, $templ);
    $templ = str_replace("#txt_message#", $message, $templ);
    $templ = str_replace("#txt_title#", 'We are getting new inquiry from betting website!', $templ);
    $subject = "We are getting new inquiry from betting website.";
}

?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>

<script type="text/javascript">

    var ToEmail = 'mayankgajjar888@gmail.com';
    var EmailHTML = '<?php echo $templ; ?>';

    Email.send({
        Host: "smtp.gmail.com",
        Port: 587,
        UseDefaultCredentials: false,
        EnableSsl: true,
        SMTPSecure:"tls",
        Username: "info@onlytickets.in",
        Password: "yXySs1z3KBSt",
        To: ToEmail,
        From: "info@onlytickets.in",
        Subject: "<?php echo $subject; ?>",
        Body: EmailHTML
    }).then(
        message => console.log("message",message)
    );

</script>
