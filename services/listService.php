<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../repository/userRepository.php';
require_once __DIR__ . '/../repository/colorRepository.php';
require_once __DIR__ . '/../repository/registerRepository.php';

class ListService 
{
    protected $repositoryUser;
    protected $repositoryColor;
    protected $repositoryRegister;
    protected $conn;

    public function __construct() {
        $config = new Config();   
        $this->conn = $config->conn;
        
        $this->repositoryUser = new UserRepository();
        $this->repositoryColor = new ColorRepository();
        $this->repositoryRegister = new RegisterRepository();
    }

    public function listAll()
    {
        return $this->repositoryRegister->searchList($this->conn);
    }

    public function listUsers()
    {
        return $this->repositoryUser->listUsers($this->conn);
    }

    public function listColors()
    {
        return $this->repositoryColor->listColors($this->conn);
    }
} 
?>
