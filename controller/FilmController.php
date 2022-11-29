<?php

class FilmController extends Controller {

    // attributs

    // actions

    public function __construct() {
        // on utilise parent::__construct pour utiliser le constructeur parent (ici Controller.php) / sert à récupérer l'état de la connexion
        /* parent::__construct(); */
        /* $this->path_view = 'view/';
        $this->path_view_communes = 'view/site/communes/'; */
    }

    // permet de récupérer les infos nécessaires à l'affichage de l'index et de retourner la vue
    public function index() {
        if(!$this->connexion) {
            // si l'utilisateur n'a pas fait de connexion on le redirige vers le login de l'administration
            return (new AdminController)->render('login');
        }
        // verif si l'utilisateur peut voir la page ou pas
        // demande au model film de recup les livres en bdd
        /* if (!Utilisateur::isConnect()) {
            // redirection vers l'index du site web
            return (new SiteController())->render('index');
            // redirection vers le login de l'admin
            (new AdminController())->render('login');
        }
        $films = Film::select();
        var_dump($films);
        var_dump(compact('films', 'salut'));
        return $this->render('index', compact('films', 'salut')); */
        // + render la bonne vue avec le html qui permet de générer la liste
        
    }
}