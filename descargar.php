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
					$fileDown = $carpeta."/".$archivo;//sacamos el nombre del archivo
					echo $fileDown;
					header('Location: '.$fileDown);
				}
			}
	}
	
?>
