<?php

	$profesores = array(
				array(
					"numeroID" => "3",
					"nombre"   => "Jorge",
					"apellido" => "Mochon",
					"especialidad" => array("Imagen", "Video")
					),
				array(
					"numeroID" => "120",
					"nombre"   => "Luis",
					"apellido" => "Berganza",
					"especialidad" => array("Desarrollo", "Aplicaciones Moviles")
					)
		);

		header('Content-Type: application/json');
			echo json_encode($profesores);

?>