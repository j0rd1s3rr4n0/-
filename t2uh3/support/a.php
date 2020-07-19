  
<?php
	$formatos   = array('.jpg', '.png', '.gif', '.html', '.txt');
	$directorio = 'problemas'; 
	if (isset($_POST['boton'])){
		$nombreArchivo    = $_FILES['archivo']['name'];
		$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
		$ext              = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
		if (in_array($ext, $formatos)){
			if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
				echo "Felicitaciones, archivo $nombreArchivo subido exitosamente";
			}else{
				echo 'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"';
			}
		}else{
			echo 'Aquí va el mensaje que quieres mostrar cuando un usuario suba un archivo con una extensión diferente';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Ver Directorio
	</title>
	<meta charset="utf-8">
	<meta description="DIRECTORIO">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<div class="card">
			<div class="card-header">
				Archivos existentes en el directorio
			</div>
			<div class="card-block">
				<div class="row">
				<?php
					if ($dir = opendir($directorio)){
						while ($archivo = readdir($dir)) {
							if ($archivo != '.' && $archivo != '..'){
								echo '<div class="col-sm-3 col-xs-12">';
									echo "Archivo:<br><a href='./$directorio/$archivo'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/HTML_logo.png/250px-HTML_logo.png' height='5%' title='imagen' alt='imagen'/><strong>$archivo</strong></a><br /><style>img[src*='https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png'] {display: none;}</style>";
									//echo <a href="'.$directorio.'/'.$archivo.'"><img src="'.$directorio.'/'.$archivo.'" title="imagen" alt="imagen"/>';
								echo '</div>';
							}
						}
					}
				?>
				</div>
			</div>
		</div>
	</div>

	<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->
</body>
<style>img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}</style>
</html>