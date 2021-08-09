<?php
		include 'inicioCamionero.php';	
	?>
	
<html>

<div class="container">

<head>
</head>
<body style= "background-color:E8E8E8";>
<div class="container">
			<h1 style="margin-top: 20px;">Registro de Paquete</h1>

			<form action="nuevoPaquete.php" method="POST">
			
		<div class="mb-3">
              <label for="txtIDcamionero" class="form-label">Codigo Del Paquete.</label>
              <input type="text" name="txtCodigoPaquete" class="form-control" id="txtcedula"required>
        </div>
		<div class="mb-3">
              <label for="txtIDcamionero" class="form-label">Contenido.</label>
              <input type="text" name="txtContenido" class="form-control" id="txtcedula"required>
        </div>
		<div class="mb-3">
              <label for="txtIDcamionero" class="form-label">Direccion.</label>
              <input type="text" name="txtDireccion" class="form-control" id="txtcedula"required>
        </div>
		<div class="mb-3">
                <label for="txtnombre" class="form-label">Nombre Del Remitente.</label>
                <input type="text" name="txtNombreRemitente" class="form-control" id="txtnombre"required>
        </div>
        <div class="mb-3">
                <label for="txtapellido" class="form-label">Destino Del Paquete (Pais).</label>
                <input type="text" name="txtPaisDestinoPaquete" class="form-control" id="txtapellido"required>
        </div>
		<div class="mb-3">
                <label for="txtapellido" class="form-label">Direccion Del Destinatario (Remitente).</label>
                <input type="text" name="txtDireccionDestinatario" class="form-control" id="txtapellido"required>
        </div>
<input type="submit" class="btn btn-success" name="subirimg" value="Guardar"/>
</body>



</html>