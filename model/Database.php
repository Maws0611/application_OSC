<?php


class Database {

    public function connect() {

    //    throw new Exception('Impossible de vous affichez cette page');
    try {

        return $bdd= new mysqli('localhost', 'root', '', 'applicationnousfemme');
        
    }

   catch (Exception $e) {

      ('error: ' . $e->getMessage());

  }
  return $bdd;
}
}
