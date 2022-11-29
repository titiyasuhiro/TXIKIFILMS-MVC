<?php
// le controller permet de gérer les pages du site

class SiteController extends Controller {
    
    // attributs

    // méthodes

    public function __construct() {
        $this->path_view = 'view/site/';
        $this->path_view_communes = 'view/site/communes/';
        $this->path_model = 'model/';
    }

    // permet d'afficher la page 'index' du site web
    public function index() {
        //var_dump('index');
        $title = 'TXIKI FILMS';
        $this->render('index', compact('title'));

    }

    // permet d'afficher la page 'fictions' du site web
    public function fiction() {
        //var_dump('fiction');
        $title = 'page fictions';
        $this->addCssScript('css/fiction.css');
        $this->render('fiction', compact('title'));
    }

    // permet d'afficher la page 'documentaires' du site web
    public function documentaire() {
        //var_dump('documentaire');
        $title = 'page documentaires';
        $this->addCssScript('css/documentaire.css');
        $this->render('documentaire', compact('title'));
    }

    // permet d'afficher la page 'animations' du site web
    public function animation() {
        //var_dump('animation');
        $title = 'page animations';
        $this->addCssScript('css/animation.css');
        $this->render('animation', compact('title'));
    }

    // permet d'afficher la page 'autres' du site web
    public function autre() {
        //var_dump('autre');
        $title = 'page autres';
        $this->addCssScript('css/autre.css');
        $this->render('autre', compact('title'));
    }

    // permet d'afficher la page 'actualités' du site web
    public function actualite() {
        //var_dump('actualite');
        $title = 'page actualités';
        $this->addCssScript('css/actualite.css');
        $this->render('actualite', compact('title'));
    }

    // permet d'afficher la page 'à propos' du site web
    public function apropos() {
        //var_dump('apropos');
        $title = 'page à propos';
        $this->render('apropos', compact('title'));
    }
    // permet d'afficher la page 'mentions légales' du site web
    public function mentionlegale() {
        //var_dump('mentionlegale');
        $title = 'page mentions légales';
        $this->render('mentionlegale', compact('title'));
    }

    // permet d'afficher la page 'confidentialité' du site web
    public function confidentialite() {
        //var_dump('confidentialite');
        $title = 'page confidentialité';
        $this->render('confidentialite', compact('title'));
    }

    // permet d'afficher la page 'conditions de vente' du site web
    public function conditionvente() {
        //var_dump('conditionvente');
        $title = 'page conditions de vente';
        $this->render('conditionvente', compact('title'));
    }

    // permet d'afficher la page 'film' (single) du site web
    public function film() {
        //var_dump('films');
        $title = 'page film';
        $films = (new Film())->select();
        $this->addCssScript('css/film.css');
        $this->render('film', compact('title', 'films'));
    }

    // permet d'afficher la page 'contact' du site web
    public function contact() {
        //var_dump('contact');
        $title = 'page contact';
        $this->addCssScript('css/contact.css');
        $this->render('contact', compact('title'));
    }

    public function ContactFormSubmit() {
        echo '<script>alert("Votre message est envoyé")</script>';
       
    }
    
    
}