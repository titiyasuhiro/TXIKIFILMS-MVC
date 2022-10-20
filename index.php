<?php

    // on initialise la session
    session_start();
    //var_dump($_GET);
    require 'vendor/autoload.php';

    //gestion affichage erreur
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

    include 'helper/LienHelper.php';
    include 'helper/ImgHelper.php';
    include 'controller/Controller.php';
    include 'controller/SiteController.php';
    include 'controller/AdminController.php';
    include 'model/Table.php';
    include 'model/Film.php';
    
    
    // si un controller passe en GET on le récupère
    if(!empty($_GET['controller'])) {
        $controller = $_GET['controller'];
        //var_dump($controller);
        //var_dump($_GET);
        if(!is_file('controller/' . $controller . '.php')) {
            // retourne page 404
            (new SiteController)->error404();
        }
        else{
            // on fait l'instanciation
            $controller = new $controller;
            //var_dump($controller);
            // on vérifie si une méthode existe ou non
            if(!empty($_GET['method'])) {
                // on l'utilise si elle existe
                $method = $_GET['method'];
                //var_dump($method);
                //var_dump($_GET);
                //var_dump(method_exists($controller, $method));
                if(!method_exists($controller, $method)) {
                    //var_dump(method_exists($controller, $method));
                    // erreur 404
                    (new SiteController)->error404();
                }
                else{
                    //si non on utilise la méthode demandée
                    $controller->$method();
                }
            }
        }
    }
    else{
        // si pas de controller et/ou d'action afficher l'index par défaut
        (new SiteController)->index();
    }
    //var_dump($_SESSION);
    //$_SESSION = [];
