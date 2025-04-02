<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../repository/registerRepository.php';


class DeleteService 
{
    protected $repositoryRegister;
    protected $conn;

    public function __construct() {
        $config = new Config();   
        $this->conn = $config->conn;
        
        $this->repositoryRegister = new RegisterRepository();
    }

    public function deleteRegister($id)
    {
        return $this->repositoryRegister->deleteRegister($this->conn, $id);
    }
}

?>