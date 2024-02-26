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
<h1>Messages</h1>

<ul>
<?php
foreach ($data as $value) {
	echo('<li>' . $value . '</li>');
}
?>
</ul>


</body>