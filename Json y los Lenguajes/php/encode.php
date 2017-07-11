<!DOCTYPE>
<html>

	<head>
		<meta charset="utf-8">
	</head>
	
	<body>
	<h1>Tutorial JSON</h1>
	
	<div id="contenedor"></div>
	
	
	<?php
	
				$varios = array ( "nombre"     => "Luis Berganza",
						"id"         => 313,
						"profesor"   => true,
						"idCursos"   => array(53,765,675),
						"cursos"     => array (
										"marketing"		=> "Mi primera app para iPhone",  
										"programacion"  => array(
										  
											"Objective C",
											"Xcode",
											"Json"
											
										)),
						
						"vacaciones" => null
						
						);
	
						
				echo json_encode($varios);	
	
	
	
	?>

	</body>
	
</html>