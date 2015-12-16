<?php

class HomeController {

	public function indexAction()
    {
        return $view = new View('home', ['titulo' => "Mejorandola Clase 2"]);
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
