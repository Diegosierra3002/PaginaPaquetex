<?php
		include 'inicioCamionero.php';	
	?>
	
<html>

<div class="container">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style= "background-color:E8E8E8";>
<div class="container">
			<h1 style="margin-top: 20px;">Registro de Camiones</h1>

			<form action="nuevoCamion.php" method="POST" enctype="multipart/form-data"/>
		<div class="mb-3">
              <label for="txtIDcamionero" class="form-label">IDCamion (Matricula)</label>
              <input type="text" name="txtIDCamion" class="form-control" id="txtIDCamion"required>
        </div>
		<div class="mb-3">
                <label for="txtnombre" class="form-label">Modelo</label>
                <input type="text" name="txtModelo" class="form-control" id="txtModelo"required>
        </div>
        <div class="mb-3">
                <label for="txtapellido" class="form-label">Tipo</label>
                <input type="text" name="txtTipo" class="form-control" id="txtTipo"required>
        </div>
		<div class="mb-3">
                <label for="txtapellido" class="form-label">Potencia</label>
                <input type="text" name="txtPotencia" class="form-control" id="txtPotencia"required>
        </div>
		
		Agregar imagen: <input name="txtarchivo"  id="txtarchivo" type="file"/>
<input type="submit" class="btn btn-success" name="subirimg" value="Registrar"/>


</body>



</html>