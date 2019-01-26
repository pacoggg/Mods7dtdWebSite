<?php
	
	require 'conexion.php';

	$id = $_GET['id'];
	
	
	
	descargarFile('files/'.$id);
	
	function descargarFile($carpeta)
	{
		$directorio = opendir($carpeta); //ruta actual
			while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
			{
				if (!(is_dir($archivo)))//verificamos si es o no un directorio
				{
				$nombreArchivo=$carpeta."/".$archivo;//imprimimos el nombre del archivo
				//PONER BOTON PARA DESCARGAR
				echo '<div class="container"><div class="row"><div class="row" style="text-align:center">
				<a href='.$nombreArchivo.' class="btn btn-primary">Descargar</a></div></div></div>';
				}
				
			}
	}
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<a href="index.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
