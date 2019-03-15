<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Forgot Password</title>
	<style type="text/css">
		body {
			padding:0;
			margin:0;
			font-family:arial;
		}
		h1,h2,h3,h4,h5,h6 {
			padding:0;
			margin:0;
		}
		.forgot-contain {
			background:#f5f5f5;
			position:absolute;
			padding:100px 0;
			width:100%;
			text-align:center;
			height:100%;
		}
		.forgot-inner-contain {
			width:100%;
			height:100%;
			display:table;
		}
		.detail-forgot-contain {
			display:table-cell;
			vertical-align:middle;
		}
		.logo-email {
			width:200px;
		}
		.detail-inner-forgot {
			width:500px;
			box-shadow:0 0 15px #eee;
			margin:25px auto;
			background:#fff;
			padding:25px;
			text-align:left;
		}
		.detail-inner-forgot h2 {
			color:#e30613;
			font-size:17px;
		}
		.btn-sign {
			padding: 8px 25px;
			line-height: 18px;
			color: #fff;
			text-decoration:none;
			font-weight:normal;
			display:inline-block;
			font-weight: bold;
			background: #e30613;
		}
		.btn-forgot {
			text-align:center;
			margin:5px 0 5px 0;
		}
		.detail-inner-forgot p {
			color:#666;
			font-size:14px;
			line-height: 21px;
		}
		.detail-forgot-contain h6 {
			font-size:13px;
			font-weight:bold;
		}
		@media(max-width:767px){
			.detail-inner-forgot {
				width:75%;
			}
		}
		@media(max-width:479px){
			.btn-sign {
				font-size:13px;
			}
		}
	</style>
</head>

<body>
	<div class="forgot-contain">
		<div class="forgot-inner-contain">
			<div class="detail-forgot-contain">
				<img src="https://onlytickets.in/smtptest/script/email_temp/image/logo.png" class="logo-email" alt="logo" />
				<div class="detail-inner-forgot">
					<h2>Hello !</h2>
					<p>You are receiving this email because we received a password request for your account.</p>
					<div class="btn-forgot">
						<a href="#link#" class="btn-sign" id="pass-btn">Click Here Reset Password</a>
					</div>
					<p>If you did not forgot your password, no further action is required.</p>
					<p><b>Thank You.</b></p>
				</div>
				<h6>Copyright OnlyTickets. All rights reserved 2018</h6>
			</div>
		</div>
	</div>
</body>

</html>

