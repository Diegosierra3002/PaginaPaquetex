<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<i class="bi bi-door-open-fill"></i>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php
	include 'inicioCamionero.php';
	?>
	<html>
	<head>
		
	</head>
	</html>
<div class="container">
	
<?php
    $tipoImagen = $_FILES['txtarchivo']['type'];
	$rutaImagen = "img/";
	$imagenTemporal = $_FILES['txtarchivo']['tmp_name'];

	$extension  = array_search($tipoImagen,
								array(
										'jpg' => 'image/jpeg',
										'png' => 'image/png',										
										'bmp' => 'image/bmp'
									));	
									
									
	include 'conexionBD.php';
	//consultar último ID de la tabla carrusel y sumarle 1
	$archivo = $rutaImagen . "camioncito".$_POST['txtIDCamion'].".".$extension;	
	if(is_uploaded_file($imagenTemporal)) {
        if(move_uploaded_file($imagenTemporal, $archivo)) {
            //guardar en base de datos
			$sql = "insert into camiones values
					($_REQUEST[txtIDCamion],
					'$_REQUEST[txtModelo]',
					'$_REQUEST[txtTipo]',
					'$_REQUEST[txtPotencia]',
					'$archivo'
					 );";
					 
					 //FALTA EJECUTAR CONSULTA!!!!
					 echo $sql;
 $datos = $conexion->query($sql) or die ("Error Interno...");
			header('location: index.php');
        }
        else {
            echo "no se pudo copiar el archivo";
        }
    }
    else {
        echo "Error interno del sistema, contacte al administrador";
    }
								
  include 'conexionBD.php';
  
  

 

?>

<?php	
	require_once "pieDePagina.php";
?>

</div>