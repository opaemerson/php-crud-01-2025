<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../repository/userRepository.php';
require_once __DIR__ . '/../repository/colorRepository.php';
require_once __DIR__ . '/../repository/listRepository.php';

class ListService 
{
    protected $repositoryUser;
    protected $repositoryColor;
    protected $repositoryList;
    protected $conn;

    public function __construct() {
        $config = new Config();   
        $this->conn = $config->conn;
        
        $this->repositoryUser = new User();
        $this->repositoryColor = new Color();
        $this->repositoryList = new ListRepository();
    }

    public function listAll()
    {
        return $this->repositoryList->searchList($this->conn);
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
