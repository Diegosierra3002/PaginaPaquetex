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
  
  include 'conexionBD.php';
  
  $sql = "insert into conductor values
($_REQUEST[txtIDcamionero],
'$_REQUEST[txtNombre]',
'$_REQUEST[txtTelefono]',
'$_REQUEST[txtDireccion]',
$_REQUEST[txtSalario],
'$_REQUEST[txtMunicipio]',
'$_REQUEST[txtMatricula]',
'/foto.jpg')";
 
 echo $sql;
 $datos = $conexion->query($sql) or die ("Error Interno...");

?>

<div class="alert alert-success" role="alert">
  Registro Exitoso¡
</div>
<?php	
	require_once "pieDePagina.php";
?>

</div>
</html>