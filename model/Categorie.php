<?php

class Categorie extends Table {
    // attributs

    public $id;
    public $libelle;
    public $statut;

    // méthodes (actions)

    // permet d'attribuer les valeurs dans les attributs lors de l'instanciation 
    public function __construct($_data = []) {
        $this->path_view = 'view/site/';
        foreach ($_data as $attr => $value) {
            //var_dump($attr);
            //var_dump($value);
            // si l'attribut est déclaré en variable on lui passe une valeur
            // la condition bloque la déclaration d'une variable à la volée
            if(property_exists('Categorie', $attr)) {
                $this->$attr = $value;
            }
        }
    }

    // retourne les films liés à une catégorie
    public function getFilm() {

    }

    // retourne le nombre de films liés à une catégorie
    public function getNombreFilm() {
        $sql = 'SELECT COUNT(id_film) FROM categorie_film WHERE id_categorie = ' . $this->id;
        $req = self::getPDO()->query($sql);
        // var_dump($req->fetch(PDO::FETCH_NUM));
        // var_dump($req->fetch(PDO::FETCH_NUM)[0]);
        // on retourne directement la valeur
        return $req->fetch(PDO::FETCH_NUM)[0];
    }
}