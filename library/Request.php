<?php

class Request { 

	protected $url;
	protected $controller;
	protected $defaultController = 'Home';
	protected $action;
	protected $defaultAction = 'index';
	protected $params = array();

	public function __construct($url)
	{
		$this->url = $url;
		$segments = explode('/', $this->getUrl());
		
		$this->resolveController($segments);//LLama metodo para recoger los segmentos
		$this->resolveAction($segments);
		$this->resolveParams($segments);
	}

	public function resolveController(&$segments){
		$this->controller = array_shift($segments);

		if(empty($this->controller))
		{
			$this->controller = $this->defaultController;
		}
	}

	public function resolveAction(&$segments){
		$this->action = array_shift($segments);

		if(empty($this->action))
		{
			$this->action = $this->defaultAction;
		}
	}

	public function resolveParams(&$segments)
	{
		$this->params = $segments;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getController()
	{
		return $this->controller;
	}

	public function getControllerClassName()
	{
		return Inflector::camel($this->getController()).'Controller';
	}

	public function getControllerFileName()
	{
		return 'controllers/'. $this->getControllerClassName(). '.php';
	}

	public function getAction()
	{
		return $this->action;
	}
	public function getActionMethodName()
	{
		return Inflector::lowerCamel($this->getAction()).'Action';
	}

	public function getParameter()
	{
		return $this->params;
	}

	public function execute()
	{
		$controllerClassName = $this->getControllerClassName();
		$controllerFileName  = $this->getControllerFileName();
		$actionMethodName    = $this->getActionMethodName();
		$params              = $this->getParameter();

		if(! file_exists($controllerFileName))
		{
			exit('El controlador no existe');
		}

		require $controllerFileName;

		$controller = new $controllerClassName();
		call_user_func_array([$controller, $actionMethodName], $params);
		
	}

}


