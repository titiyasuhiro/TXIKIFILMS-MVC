<?php

class Contact {
    // attributs

    public $id;
    public $prenom;
    public $nom;
    public $mail;
    public $tel;
    public $objet;
    public $message;
    public $date;
    public $statut;


     // actions

    public function __construct(array $_data = []) {
        //var_dump($_data);
        #Boucle sur le tableau $_data
        foreach ($_data as $index => $valeur){
            //var_dump($index);
            //var_dump($valeur);
            # Si l'attribut est déclaré dans l'objet alors on lui passe la valeur
            # La condition permet de ne pas créer d'attrs a la volée
            if (property_exists('Contact', $index)) {
                $this->$index = $valeur;
            }             
        }
        
    }

        /**
     * add
     * Permet d'ajouter un contact en bdd
     * @return void
     */
    public function add(PDO $_pdo) {
        # Génération du SQL
        $sql = 'INSERT INTO contact VALUES (NULL, :prenom, :nom, :mail, :tel, :objet, :message, 0, 0)';
        # Génération du tableau des données
        $data = [
            ':prenom' => $this->prenom,
            ':nom' => $this->nom,
            ':mail' => $this->mail,
            ':tel' => $this->tel,
            ':objet' => $this->objet,
            ':message' => $this->message,
            
        ];
        # préparation de la requete
        $req = $_pdo->prepare($sql);
        # Si la requete échoue
        if (!$req->execute($data)) {
            return false;
        }
        # On récupere le dernier ID ajouté en bdd
        $last_id = $_pdo->lastInsertId();
        # On l'ajoute directement en attribut
        $this->id = $last_id;
        return true;
    }
    
}