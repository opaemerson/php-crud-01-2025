<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../repository/registerRepository.php';

class ListService 
{
    protected $repositoryRegister;
    protected $conn;

    public function __construct() {
        $config = new Config();   
        $this->conn = $config->conn;
        
        $this->repositoryRegister = new RegisterRepository();
    }

public function insertRegister()
    {
        return $this->repositoryList->insertRegister($this->conn, $params);
    }
} 
?>
