<?php

    require_once('Database.php');

class CreateAccount extends Database {

   public function getAccount(){

        try {
           
            $bdd=$this->connect();

            $requet = $bdd->query("SELECT * FROM entreprises");

            return $requet;
        }
        catch (Exception $e) {

            die("Erreur: " . $e->getMessage());
        }
    }
}