
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Form Receipt</title>
	<style>
		body {
			background: #f4f6f8;
			font-family: 'Segoe UI', Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		.email-container {
			max-width: 600px;
			margin: 40px auto;
			background: #fff;
			border-radius: 8px;
			box-shadow: 0 2px 8px rgba(0,0,0,0.07);
			overflow: hidden;
		}
		.email-header {
			background: #1a237e;
			color: #fff;
			padding: 24px 32px 16px 32px;
			text-align: center;
		}
		.email-header h1 {
			margin: 0;
			font-size: 2rem;
			font-weight: 600;
		}
		.email-body {
			padding: 32px;
			color: #263238;
		}
		.email-body h2 {
			font-size: 1.2rem;
			margin-bottom: 12px;
		}
		.email-body p {
			margin: 0 0 16px 0;
			line-height: 1.7;
		}
		.email-footer {
			background: #f4f6f8;
			color: #607d8b;
			text-align: center;
			padding: 16px 32px;
			font-size: 0.95rem;
		}
		@media (max-width: 600px) {
			.email-container { margin: 0; border-radius: 0; }
			.email-body, .email-header, .email-footer { padding: 16px; }
		}
	</style>
</head>
<body>
	<div class="email-container">
		<div class="email-header">
			<h1>Larydot Recruitment Ltd</h1>
		</div>
		<div class="email-body">
			<h2>Thank you for contacting us!</h2>
			<p>Dear {{ $name ?? 'Valued User' }},</p>
			<p>We have received your message and our team will get back to you as soon as possible.</p>
			<p><strong>Your Submission Details:</strong></p>
			<ul style="padding-left: 1.2em;">
				<li><strong>Name:</strong> {{ $name ?? '' }}</li>
				<li><strong>Email:</strong> {{ $email ?? '' }}</li>
				<li><strong>Subject:</strong> {{ $subject ?? '' }}</li>
				<li><strong>Message:</strong> {{ $user_message ?? '' }}</li>
			</ul>
			<p>If you have any urgent queries, feel free to reply to this email.</p>
		</div>
		<div class="email-footer">
			&copy; {{ date('Y') }} Larydot Recruitment Ltd. All rights reserved.<br>
			<span style="font-size:0.9em;">Company No.: 12289148 | United Kingdom</span>
		</div>
	</div>
</body>
</html>
