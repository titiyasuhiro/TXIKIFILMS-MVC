<?php

class Film extends Table {

    // attributs

    public $id;
    public $teaser;
    public $affiche;
    public $titre;
    public $resume;
    public $auteur;
    public $realisateur;
    public $duree;
    public $support;
    public $format;
    public $date_sortie;
    public $palmares;
    public $diffusion;
    public $statut;

    // method (actions)

    // permet d'attribuer les valeurs dans les attributs lors de l'instanciation 
    public function __construct($_data = []) {
        foreach ($_data as $index => $valeur) {
            //var_dump($index);
            //var_dump($valeur);
            // si l'attribut est déclaré en variable on lui passe une valeur
            // la condition bloque la déclaration d'une variable à la volée
            if(property_exists('Film', $index)) {
                $this->$index = $valeur;
            }
        }
        /* if($this->id != null) {
            $this->getCategorie();
        } */
    }

    // permet d'instancier PDO si ce n'est pas déjà fait, si non retourne PDO
    /* public function getPDO() {
        $dsn = 'mysql:dbname=xbau4383_txikifilms;host=localhost';
        $user = 'xbau4383_txiki';
        $password = 'con15ExR1vsJzDc5';

        if($this->pdo == null) {
            $this->pdo = new PDO($dsn, $user, $password);
        }
        return $this->pdo;
    } */

    // récupère 1 ou tous les films enregistrés en bdd
    public function select ($id = 0) {
        if($id !== 0) {
            // on génère le SQL unique
            $sql = 'SELECT * FROM film WHERE id = ?';
        }
        else{
            // on génère le SQL 
            $sql = 'SELECT * FROM film';
        }
        //var_dump($sql);
        // on exécute la requête avec PDO
        $req = $this->getPDO()->query($sql);
        // on demande un retour sous forme de class et plus précisément la classe 'Film'
        $req->setFetchMode(PDO::FETCH_CLASS, 'Film');
        if($id !=0 ) {
            // fetch si c'est un id
            $data = $req->fetch();
        }
        else{
            // fetchAll si pas d'_id
            $data = $req->fetchAll();
        }
        //var_dump($data);
        return $data;
    }

    // récupère une liste d'une ou plusieurs catégories liées à un film
    public function getCategorie() {
        $sql = 'SELECT * FROM categorie_film
        INNER JOIN categorie ON categorie_film.id_categorie = categorie.id
        WHERE categorie_film.id_film = ?';
        $req = self::getPDO()->prepare($sql);
        $req->execute([$this->id]);
        $this->categorie = $req->fetchAll(PDO::FETCH_ASSOC);
        return $this->categorie;
    }

    // ajouter une catégorie à un film en bdd
    public function addCategorieToFilm() {
        foreach ($this->categorie as $categorie) {
            $sql = "INSERT INTO categorie_film VALUES (:id_categorie, :id_film)";
            $req = self::getPDO()->prepare($sql);
            if (!$req->execute([':id_categorie' => $categorie, ':id_film' => $this->id])) {
                var_dump($req->errorInfo());
                die('Error info categorie');
                return false;
            }
        }
        return true;
    }
    // récupère une liste d'un ou plusieurs commentaires liés à un film
    public function getCommentaire() {
        $sql = "SELECT * FROM commentaire_film
        INNER JOIN commentaire ON commentaire_film.id_commentaire = commentaire.id
        WHERE commentaire_film.id_film = ?";
        $req = self::getPDO()->prepare($sql);
        $req->execute([$this->id]);
        $this->commentaire = $req->fetchAll(PDO::FETCH_ASSOC);
        return $this->commentaire;
    }
    // ajouter un commentaire à un film en bdd
    public function addCommentaireToFilm() {
        foreach ($this->commentaire as $commentaire) {
            $sql = "INSERT INTO commentaire_film VALUES (:id_commentaire, :id_film)";
            $req = self::getPDO()->prepare($sql);
            if (!$req->execute([':id_commentaire' => $commentaire, ':id_film' => $this->id])) {
                var_dump($req->errorInfo());
                die('Error info commentaire');
                return false;
            }
        }
        return true;
    }

    // retourne le chemin pour accéder à l'affiche d'un film
    public function getSrcAffiche() {
        return 'img/affiches/' . $this->affiche;
    }

    //retourne le chemin pour accéder au teaser d'un film
    public function getTeaser() {
        return 'videos/teasers/' . $this->teaser;
    }

    //retourne le chemin pour accéder au film complet
    public function getFilm() {
        return 'videos/films/' . $this->film;
    }

    // permet d'ajouter un film dans le dossier videos/films/
    public function addFilmOnDir($_files) {
        // gestion des films 
        // on enregistre le titre du film 
        $film = $_files['film']['name'];
        // on entregistre l'extension du fichier
        $film_type = $_files['film']['type'];
        // on enregistre l'endroit où récupérer le fichier
        $dossier_temporaire = $_files['film']['tmp_name'];
        // on enregistre le dossier de destination du fichier
        $dossier_destination = 'videos/films/' . $film;
        // on déplace le film dans le dossier de destination
        if(!move_uploaded_file($dossier_temporaire, $dossier_destination)) {
            // erreur film non déplacé
            return false;
        }
        // film bien déplacé 
        return true;
    }

    // permet d'ajouter un teaser dans le dossier videos/teasers/
    public function addTeaserOnDir($_files) {
        // gestion des films 
        // on enregistre le titre du film 
        $teaser = $_files['teaser']['name'];
        // on entregistre l'extension du fichier
        $teaser_type = $_files['teaser']['type'];
        // on enregistre l'endroit où récupérer le fichier
        $dossier_temporaire = $_files['teaser']['tmp_name'];
        // on enregistre le dossier de destination du fichier
        $dossier_destination = 'videos/teasers/' . $teaser;
        // on déplace le film dans le dossier de destination
        if(!move_uploaded_file($dossier_temporaire, $dossier_destination)) {
            // erreur film non déplacé
            return false;
        }
        // film bien déplacé 
        return true;
    }

    // permet d'ajouter une affiche dans le dossier img/affiches/
    public function addAfficheOnDir($_files) {
        // gestion des films 
        // on enregistre le titre du film 
        $affiche = $_files['affiche']['name'];
        // on entregistre l'extension du fichier
        $affiche_type = $_files['affiche']['type'];
        // on enregistre l'endroit où récupérer le fichier
        $dossier_temporaire = $_files['affiche']['tmp_name'];
        // on enregistre le dossier de destination du fichier
        $dossier_destination = 'img/affiches/' . $affiche;
        // on déplace le film dans le dossier de destination
        if(!move_uploaded_file($dossier_temporaire, $dossier_destination)) {
            // erreur film non déplacé
            return false;
        }
        // film bien déplacé 
        return true;
    }

    // permet de supprimer un film du dossier videos/films/
    public function removeFilmOnDir($_files) {
        $chemin_film = 'videos/films/' . $_files;
        // si le film existe 
        if(is_file($chemin_film)) {
            // on le supprime 
            if(unlink($chemin_film)) {
                // film supprimé
                return true;
            }
        }
        // erreur dans la suppression
        return false;
    }

    // permet de supprimer un teaser du dossier videos/teasers/
    public function removeTeaserOnDir($_files) {
        $chemin_teaser = 'videos/teasers/' . $_files;
        // si le teaser existe 
        if(is_file($chemin_teaser)) {
            // on le supprime 
            if(unlink($chemin_teaser)) {
                // teaser supprimé
                return true;
            }
        }
        // erreur dans la suppression
        return false;
    }

    // permet de supprimer une affiche du dossier img/affiches/
    public function removeAfficheOnDir($_files) {
        $chemin_affiche = 'img/affiches/' . $_files;
        // si l'affiche existe 
        if(is_file($chemin_affiche)) {
            // on le supprime 
            if(unlink($chemin_affiche)) {
                // affiche supprimée
                return true;
            }
        }
        // erreur dans la suppression
        return false;
    }


    
}