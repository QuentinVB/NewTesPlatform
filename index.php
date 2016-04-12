<?php 

?>
<html>
<head>
	<title>This is a title, hello world</title>
</head>
<body>
	<div id="header">
	<h1>Titre de la page</h1>
		<?php 
			include("header.php");
		?>
	</div>
	<div id="body">
	<p>Corps de la page, avec les trucs a mettre</p>
		<?php 
			include("body.php");
		?>
	</div>
	<div id="body">
	<p>Le pied, tout en bas o_o</p>
		<?php 
			include("footer.php");
		?>
	</div>
</body>
</html>