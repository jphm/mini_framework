<?php
class ContactosController{

	public function indexAction()
	{

	}

	public function ciudadAction($ciudad)
	{
		exit('Contactos '. $ciudad);
	}
}