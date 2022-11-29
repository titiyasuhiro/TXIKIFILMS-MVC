<?php

class Table {
    // attributs

    // stock la table sur laquelle nous allons intérargir
    public $table;
    // stock l'objet PDO de php
    public $pdo;

    // method (actions)

    public function __construct($_data = []) {
        foreach ($_data as $index => $valeur) {
            //var_dump($index);
            //var_dump($valeur);
            // si l'attribut est déclaré en variable on lui passe une valeur
            // la condition bloque la déclaration d'une variable à la volée
            if(property_exists('Table', $index)) {
                $this->$index = $valeur;
            }
        }
    }

    public function getPDO() {
        // instanciation de PDO
        $dsn = 'mysql:dbname=xbau4383_txikifilms;host=localhost';
        $user = 'xbau4383_txiki';
        $password = 'con15ExR1vsJzDc5';

        if($this->pdo == null) {
            $this->pdo = new PDO($dsn, $user, $password);
        }
        return $this->pdo;
    }

    // actualise et/ou sauvegarde la valeur de l'attr table
    public function getNomTable() {
        $table = strtolower(get_called_class());
        return $this->$table;
    }

    // récupère une ou plusieurs occurences d'une table 
    public function select($_id = 0) {
        if($_id != 0) {
            // on génére le sql
            $sql = 'SELECT * FROM ' . $this->getNomTable() . 'WHERE id = ' . $_id;
        }
        else{
            $sql = 'SELECT * FROM ' . $this->getNomTable();
        }
        var_dump($sql);
        // on exécute la requête PDO
        $req = $this->getNomTable()->query($sql);
        // on demande à avoir un retour sous forme de class et plus précisément la class 'Table'
        $req->setFetchMode(PDO::FETCH_CLASS, 'Table');
        if($_id != 0) {
            $data = $req->fetch();
        }
        else{
            // FetchAll si pas d'id
            $data = $req->FetchAll();
        }
        var_dump($data);
        return $data;
    }

    
}