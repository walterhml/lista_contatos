<?php

require_once 'Database.php';
require_once 'Contato.php';

class ContatoDAO {    
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    // criar um getall
    public function getAll() {
        try {

        } catch (PDOException $e) {
            return [];
        }
    }
}

?>