<?php

class HomeController {

	public function indexAction()
    {
        return $view = new View('home', ['titulo' => 'MejorandoPHP']);
    }


}


//$lenguaje = "php";
//$title="Mejorando PHP";
//$privado = "La clave";

//require "view.php";//manda llamar al documento

//view('home', compact('lenguaje','title'));


/*
para imprimir
php largo
<?php echo "  " ?>
php corto
<?= "   "?>
*/
