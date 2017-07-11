<!DOCTYPE>
<html>

	<head>
		<meta charset="utf-8">
	</head>
	
	<body>
	<h1>Tutorial JSON</h1>
	
	<div id="contenedor"></div>
	
	
	<?php
	
	$varios = '{
			
			"nombre": "Luis Berganza",
			"id":313,
			"profesor":true,
			"idCursos":[53,765,675],
			"cursos": {
			
				"marketing":"Mi primera app para iPhone",
				"programacion": [
				
					"Objective-C",
					"Xcode",
					"Json"
					
				]
			},
			
			"vacaciones":null
		}';
	
	
	print_r(json_decode($varios, true));
	
	
	
	?>

	</body>
	
</html>