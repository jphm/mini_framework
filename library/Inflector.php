<?php

class Inflector{

	public static function camel($value)
	{
		$segments = explode('-', $value);
		
		array_walk($segments, function(&$item){
			$item = ucfirst($item);
		});
		return implode('', $segments);
	}
	
	public static function lowerCamel($value)
	{
		return lcfirst(static::camel($value));
		//se puede llamar las cosas de una clave estatica
		// usando static o el nombre de la clase
	}
}