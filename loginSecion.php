<?php

include 'conexionBD.php';

$user="PaquetexMundial";
$pass="12345";

if ($_POST['username']==$user && $_POST['password']==$pass){
	$_SESSION['login']='Administrador';
	echo 'UPSS Algo Halgo Fallo. Contacte al Programador EnCargado';
	header('Location:PaginaInicio.php');
}else{
	echo 'Usuario o contraseña incorrectos';
}


?>