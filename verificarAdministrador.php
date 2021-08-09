<?php

	include "inicio.php";
	if($_SESSION['rolUsuario']!='administrador'):
		header('Location: Administracion.php');
		
?>