<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../repository/registerRepository.php';
require_once __DIR__ . '/../repository/userRepository.php';
require_once __DIR__ . '/../repository/colorRepository.php';

class UpdateService 
{
    protected $repositoryRegister;
    protected $repositoryUser;
    protected $repositoryColor;
    protected $conn;

    public function __construct() {
        $config = new Config();   
        $this->conn = $config->conn;
        
        $this->repositoryRegister = new RegisterRepository();
        $this->repositoryUser = new UserRepository();
        $this->repositoryColor = new ColorRepository();
    }

    public function updateRegister($params)
    {
        return $this->repositoryRegister->updateRegister($this->conn, $params);
    }

    public function updateUser($params)
    {
        return $this->repositoryUser->updateUser($this->conn, $params);
    }

    public function updateColor($params)
    {
        return $this->repositoryColor->updateColor($this->conn, $params);
    }
}

?>