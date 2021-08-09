<?php
		include 'inicioCamionero.php';
		include 'conexionBD.php';
		$sqlConductor = "select * from conductor";
		$datosConductor = $conexion->query($sqlConductor) or die ("Error Interno...");

	?>

	<html>
	<div class="container">
		<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
		</head>
			<form action="EliminacionDefinitiva.php" method="POST">
			<div class="mb-3">
                <label for="txtnombre" class="form-label">Conductor</label>
                <select class="form-control" id="exampleFormControlSelect1">
					<option value="id_conductor">nombre</option>
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
								<!-- Button trigger modal -->
	<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
	  Eliminar
	</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:red" id="exampleModalLabel">Atencion!!!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        No se Recuperaran los datos. ¿Esta seguro De Eliminar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="sudmit" method="post" class="btn btn-danger">Confirmar eliminación</button>
      </div>
    </div>
  </div>
</div>
</form>

</html>