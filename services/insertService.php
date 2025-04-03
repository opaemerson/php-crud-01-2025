<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../repository/registerRepository.php';
require_once __DIR__ . '/../repository/userRepository.php';

class InsertService 
{
    protected $repositoryRegister;
    protected $repositoryUser;
    protected $conn;

    public function __construct() {
        $config = new Config();   
        $this->conn = $config->conn;
        
        $this->repositoryRegister = new RegisterRepository();
        $this->repositoryUser = new UserRepository();
    }

    public function insertRegister($params)
    {
        return $this->repositoryRegister->insertRegister($this->conn, $params);
    }

    public function insertUser($name)
    {
        return $this->repositoryUser->insertUser($this->conn, $name);
    }
} 
?>
