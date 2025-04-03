<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../repository/registerRepository.php';
require_once __DIR__ . '/../repository/userRepository.php';


class DeleteService 
{
    protected $registerRepository;
    protected $userRepository;
    protected $conn;

    public function __construct() {
        $config = new Config();   
        $this->conn = $config->conn;
        
        $this->registerRepository = new RegisterRepository();
        $this->userRepository = new UserRepository();
    }

    public function deleteRegister($id)
    {
        return $this->registerRepository->deleteRegister($this->conn, $id);
    }

    public function deleteUser($id)
    {
        return $this->userRepository->deleteUser($this->conn, $id);
    }
}

?>