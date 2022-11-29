<?php

class Controller {
    // attributs
    // declaration du chemin pour le dossier des vues
    public $path_view = 'view/';
    public $path_view_communes = 'view/site/communes';
    // stock les liens css pour une page 
    public static $css_scripts = [];
    // stock les liens js pour une page
    public static $js_scripts = [];

    // permet de charger une vue et de passer des données
    public function render(string $_vue, $_data = []) {
        // chargement de vue 
        ob_start();
            extract($_data);
            include $this->path_view_communes . 'head.php';
            // afficher script css depuis le tableau
            include $this->path_view_communes . 'header.php';
            include $this->path_view_communes . 'menuSidebar.php';
            include $this->path_view . $_vue . '.php';
            include $this->path_view_communes . 'footer.php';
            // afficher script js depuis le tableau
            include $this->path_view_communes . 'buttom.php';
        
        return ob_get_contents();
    }

    // affiche la page erreur 404
    public function error404() {
        return require_once '/home/xbau4383/public_html/txikifilms/view/site/communes/404.php';
    }

    // permet de faire une redirection HTTP 
    public function redirect(string $_controller, string $_method) {
        return header('Location:index.php?controller=' . $_controller . '&method=' . $_method);
    }

    public function addCssScript($_url_script) {
        // push dans un tableau
        //var_dump($this);
        return self::$css_scripts[] = '<link href="' . $_url_script . '" rel="stylesheet" type="text/css">';
        //var_dump($this);
    }

    public static function getCssScript() {
        echo (implode(' ', self::$css_scripts));
    }

    public function addJsScript($_url_script) {
        // push dans un tableau
        //var_dump($this);
        return self::$js_scripts[] = '<script src=" ' . $_url_script . ' "></script>';
    }

    public static function getJsScript() {
        echo (implode(' ', self::$js_scripts));
    }
}