<head>
	<?php
	readfile(__DIR__ . '/../Shared/external_deps.html');
	?>
</head>
<body>
	<header>
		<?php
		readfile(__DIR__ . '/../Shared/navigation.html');
		?>
	</header>

	<h1>Contact us</h1>
	<p>Wanna reach us? write your email information and message in the following form and then submit</p>

	<form action="/Contact/send_msg" method="post">
		<fieldset>
			<p>
				<label for="name_input">Name: </label>
				<input id="name_input" type="text" name="name">
			</p>
			<p>
				<label for="email_input">Email: </label>
				<input id="email_input" type="email" name="email">
			</p>
			<p>
				<label for="msg_content_input">Message: </label>
				<input id="msg_content_input" type="textarea" name="msg_content">
			</p>
			<p>
				<input type="submit" value="Send">
			</p>
		</fieldset>

	</form>

</body>