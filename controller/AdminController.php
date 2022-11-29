<?php

class AdminController extends Controller {

    /* private bool $connect; */

    public function __construct() {
        // on donne le chemin des vues du site
        $this->path_view ='view/admin/';
        $this->path_view_communes = 'view/admin/communes/';
        $this->connect = false;
    }

    // affiche l'index de l'admin si l'utilisateur est connecté si non le formulaire de connexion

    public function index() {
        if(!$this->isConnect()) {
            // si l'utilisateur ne s'est pas connecté on le redirige vers le login de l'admin
            $title = 'page d\'index';
            $this->render('login', compact('title'));
            return $this->redirect('AdminController', 'login');
        }
        // si non on affiche l'index de l'admin
        $title = 'page d\'index';
        return $this->render('index', compact('title'));
        
    }

     // retourne le formulaire de connexion à l'admin

    public function login() {
        $title = 'page de login';
        $this->render('login', compact('title'));
    }

    // logout : permet à l'utilisateur de se déconnecter

    public function logout() {
        $_SESSION = [];
        return $this->redirect('SiteController', 'index');
    }

    // ValidFormLogin : récupère et traite les données reçues du formulaire de connexion
    // contient la logique de la connexion (récupèrer un utilisateur, vérifier le mdp, établir la connexion, etc.)

    public function ValidFormLogin() {
        //var_dump($_POST);

        // traitement du login
        if ($_POST['login'] != 'xbau4383_txiki') {
            $_SESSION['connect'] = false;
            return $this->redirect('AdminController', 'login');
        }
        // traitement du mdp
        if ($_POST['mdp'] != 'con15ExR1vsJzDc5'){
            $_SESSION['connect'] = false;
            return $this->redirect('AdminController', 'login');
        }
        // si ok on déclare 'true' en session
        $this->connect = true;
        $_SESSION['connect'] = true;
        // on redirige vers l'index
        return $this->redirect('AdminController', 'index');
    }

    // isConnect : vérifie si l'utilisateur est connecté ou pas

    private function isConnect() {
        if (isset($_SESSION['connect']) && $_SESSION['connect'] == true) {
            return true;
        }
        return false;
    }

}