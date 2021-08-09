<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<i class="bi bi-door-open-fill"></i>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php
		include 'inicioCamionero.php';	
	?>
<div class="container">
	
<?php
  
  include 'conexionBD.php';
  
  $sql = "insert into infoPaquete values
($_REQUEST[txtCodigoPaquete],
'$_REQUEST[txtContenido]',
'$_REQUEST[txtDireccion]',
'$_REQUEST[txtNombreRemitente]',
'$_REQUEST[txtPaisDestinoPaquete]',
'$_REQUEST[txtDireccionDestinatario]')";
 
 echo $sql;
 $datos = $conexion->query($sql) or die ("Error Interno...");

?>

<?php	
	require_once "pieDePagina.php";
?>

</div>