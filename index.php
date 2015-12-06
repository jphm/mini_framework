<?php
/*
El frontend controler se encarga de
configura nuestra aplicación
*/
require 'helpers.php';
require 'config.php';

//Library
require 'library/Request.php';
require 'library/Inflector.php';


if(empty($_GET['url']))
{
	$url = "";
}
else
{
	$url = $_GET['url'];
}

$request = new Request($url);
$request->execute();

/*
//Llamar al controlador indicado
if(empty($_GET['url'])){//Si esta vacio lo enviamos al home
	$_GET['url']="home";
}
*/
//controller($_GET['url']);//enviamos la ruta


/*
//Llamar a los controladores individuales

//index.php
if(empty($_GET['url'])){
	require "controllers/home.php";
}
//http://localhost/mejorandophp/index.php?url=contactos
elseif($_GET['url'] == 'contactos'){
	require "controllers/contacto.php";
}
else{
	require "controllers/error404.php";
}
*/