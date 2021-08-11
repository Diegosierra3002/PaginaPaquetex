<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php
		include 'inicioCamionero.php';	
	?>
	
<body style= "background-color:EFEFEF";>
<div class="container">
			<h1 style="margin-top: 20px;">Formulario Registro De Camioneros</h1>

			<form action="nuevoCamionero.php" method="POST">
		<div class="mb-3">
              <label  for="txtIDcamionero" class="form-label" >Cedula</label>
              <input type="text" name="txtIDcamionero" class="form-control" id="txtcedula"required>
        </div>
		<div class="mb-3">
                <label for="txtnombre" class="form-label">Nombre</label>
                <input type="text" name="txtNombre" class="form-control" id="txtnombre"required>
        </div>
        <div class="mb-3">
                <label for="txtapellido" class="form-label">Telefono</label>
                <input type="text" name="txtTelefono" class="form-control" id="txtapellido"required>
        </div>
		<div class="mb-3">
                <label for="txtapellido" class="form-label">Direccion</label>
                <input type="text" name="txtDireccion" class="form-control" id="txtapellido"required>
        </div>
		<div class="mb-3">
                <label for="txtapellido" class="form-label">Salario</label>
                <input type="text" name="txtSalario" class="form-control" id="txtapellido"required>
        </div>
		<div class="mb-3">
                <label for="txtapellido" class="form-label">Municipio</label>
                <input type="text" name="txtMunicipio" class="form-control" id="txtapellido"required>
        </div>
        <div class="mb-3">
                <label for="txtapellido" class="form-label">Matricula</label>
                <input type="text" name="txtMatricula" class="form-control" id="txtapellido"required>
        </div>
		
		<form action="guardarImagen.php" method="POST" enctype="multipart/form-data"/>Agregar imagen: <input name="archivo"  id="archivo" type="file"/>
<input type="submit" class="btn btn-success" name="subir" value="Registrar"/>
</form>

		
<?php
//Si se quiere subir una imagen
if (isset($_POST['subir'])) {
   //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, 'images/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('images/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="images/'.$archivo.'"></p>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }
}
?>
			
</body>
</div>

 <br>
<?php	
  
	require_once "pieDePagina.php";
?>
