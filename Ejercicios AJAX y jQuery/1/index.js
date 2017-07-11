var request = new XMLHttpRequest();

request.open('GET', 'index.php');
request.onreadystatechange = function() {
	
	if ((request.status==200) && (request.readyState==4)) {
		console.log(request.responseText);
	}
}

request.send();


/*
readyState		Descripción
	0			La solicitud no se ha inicializado 
	1			Conexión con el servidor establecida 
	2			El servidor ha recibido la solicitud 
	3			El servidor está procesando la solicitud 
	4			La solicitud ha sido procesada y la respuesta está lista 
*/	
