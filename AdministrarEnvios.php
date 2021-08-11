<?php
		include 'inicioCamionero.php';	
		include 'conexionBD.php';
		$sqlPaquete = "select * from infoPaquete ";
		
		$sqlConductor = "select * from conductor";					
		$datosPaquete = $conexion->query($sqlPaquete) or die ("Error Interno...");
		$datosConductor = $conexion->query($sqlConductor) or die ("Error Interno...");

	?>

	<html>
		<head>
		</head>
		<div class="container">
		<body style= "background-color:E8E8E8";>
			<h1>Crear nuevo envio</H1>
			<h4>Selecione el paquete y el conductor que desea asignar el envio</h4>

			<form action="EnvioGenerado.php" method="POST">
		<div class="mb-3">
              <label for="txtIDcamionero" class="form-label">Paquetes</label>



				<select class="form-control" id="exampleFormControlSelect1">

					<!--En php generar un ciclo mientras que traiga todos los datos de datosPaquete -->
					<?php

					while($fila = $datosPaquete->fetch_array()):
						echo "
						<option value='$fila[id_paquete]'>$fila[descripcion]</option>
						";
					endwhile;
					?>
				</select>
        </div>
		<div class="mb-3">
                <label for="txtnombre" class="form-label">Conductor</label>
                <select class="form-control" id="exampleFormControlSelect1">
					<option value="id_conductor">Nombre</option>
			<!--En php generar un ciclo mientras que traiga todos los datos de datosConductor -->
			<?php

					while($fila = $datosConductor->fetch_array()):
						echo "
						<option value='$fila[id_conductor]'>$fila[nombre]</option>
						";
					endwhile;
					?>
				</select>
        </div>
		<button type="sudmit" method="POST" class="btn btn-success">Guardar envios</button>
		</div>
</form>


		</body>
	</html>
