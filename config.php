<?php

class Config
{
    private $host = "mysql";
    private $user = "user";
    private $password = "password";
    private $dbname = "php-crud";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Conexao Falhou: " . $this->conn->connect_error);
        }

    }

    public function update($sql, $parametros)
    {
        $types = str_repeat('s', count($parametros));
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param($types, ...$parametros);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $stmt->close();
            return true;
        }

        $stmt->close();
        return false;
    }
    
}
?>
