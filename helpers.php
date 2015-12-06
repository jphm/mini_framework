<?php

function view($template, $vars = array())
{
	extract($vars);
	require "view/$template.tpl.php";
}

function controller($name){

	if(empty($name))
	{//Si esta vacio el nombre asignamos el home
		$name = "home";
	}

	$file = "controllers/$name.php";

	if(file_exists($file))
	{//comprueba si existe el archivo
		require $file;
	}
	else
	{//si no hay error
		require "controllers/error404.php";
	}
}

//Imprimir-depurar -> exit(""-var-etc)