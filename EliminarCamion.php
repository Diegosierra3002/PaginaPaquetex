<?php
		include 'inicioCamionero.php';
		include 'conexionBD.php';
		$sqlCamiones= "select * from Camiones";
		$datosCamiones = $conexion->query($sqlCamiones) or die ("Error Interno...");

	?>
	
	
	<html>
	<div class="container">
		<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</svg>
</svg>
		</head>
		<body style= "background-color:EFEFEF";>
			<form action="EliminacionDefinitivaCamion.php" method="POST">
			<div class="mb-3">				
				<table class="table">
  <thead>
    <tr>
      <th scope="col">Matricula</th>
      <th scope="col">Modelo</th>
      <th scope="col">tipo</th>
      <th scope="col">potencia</th>
      <th scope="col" >Eliminar</th>
    </tr>
</svg>
  </thead>
  
			<!--En php generar un ciclo mientras que traiga todos los datos de datosConductor -->
			<?php

					while($fila = $datosCamiones->fetch_array()):
						echo "
					    <tr>
					  <th scope='row'>$fila[id_camiones]</th>
					  <td>$fila[modelo]</td>
					  <td>$fila[tipo]</td>
					  <td>$fila[potencia]</td>
					<th><button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal'>
			  Eliminar
			</button><i class='bi bi-trash'></i></th></option>
						";
						
					endwhile;
					?>
				</select>
        </div>		
								<!-- Button trigger modal -->


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

</table>
</body>
</form>
	
</html>