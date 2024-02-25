<head>
	<?php
	readfile(__DIR__ . '/../Shared/external_deps.html');
	?>
</head>
<body>
	<header>
		<?php
		include(__DIR__ . '/../Shared/navigation.php');
		?>
	</header>
</body>
<?php
echo(__FILE__);
?>
<h1>Contact us</h1>
<p>Wanna reach us? write your email information and message in the following form and then submit</p>
<form action="" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <br>

        <input type="submit" value="Submit">
    </form>