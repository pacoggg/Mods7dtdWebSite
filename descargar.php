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
					$fileDown = $carpeta."/".$archivo;//imprimimos el nombre del archivo
					//PONER BOTON PARA DESCARGAR
					
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
					<div class="container">
						<div class="row">
							<div class="row" style="text-align:center">
								<a href='#' data-href='eliminar.php?id=".$aRow['id']."' data-toggle='modal' data-target='#confirm-delete'><span class='glyphicon glyphicon-trash'></span></a>
								<a href="<?php echo $archivo; ?>" class="btn btn-success">Descargar</a>
							</div>
						</div>
					</div>	
					<a href="index.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>
		<!-- Fin Modal -->
	</body>
</html>
