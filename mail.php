<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>

<script type="text/javascript">


	$( document ).ready(function() {
	    SendEmail();
	});


	var ToEmail = 'mayankgajjar888@gmail.com';
	var EmailHTML = 'mayankgajjar888@gmail.com';

	function SendEmail() {
    //localStorage.setItem("Email", true);
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
        Subject: "Security alert",
        Body: EmailHTML
    }).then(
        message => console.log("message",message)
    );
}


</script>