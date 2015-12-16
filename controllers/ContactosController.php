<?php
class ContactosController{

	public function indexAction()
	{
		return $view = new View('contactos', ['titulo' => 'Contactos']);
	}

	public function ciudadAction($ciudad)
	{
	
	}
}