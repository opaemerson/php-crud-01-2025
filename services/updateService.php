<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../repository/registerRepository.php';


class UpdateService 
{
    protected $repositoryRegister;
    protected $conn;

    public function __construct() {
        $config = new Config();   
        $this->conn = $config->conn;
        
        $this->repositoryRegister = new RegisterRepository();
    }

    public function updateRegister($params)
    {
        return $this->repositoryRegister->updateRegister($this->conn, $params);
    }
}

?>