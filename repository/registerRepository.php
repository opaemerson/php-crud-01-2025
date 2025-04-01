<?php
class RegisterRepository 
{
    public function searchList($conn)
    {
        $sql = "SELECT a.*, b.nome as cor
            FROM usuarios a
            INNER JOIN cores b
            ON b.id = a.id_cor";
            
        $return = $conn->query($sql);

        if ($return->num_rows > 0) {
            return $return->fetch_all(MYSQLI_ASSOC);
        }

        return false;
    }

    public function insertRegister($conn)
    {
        $sql = "SELECT a.*, b.nome as cor
        FROM usuarios a
        INNER JOIN cores b
        ON b.id = a.id_cor";
        
        $return = $conn->query($sql);

        if ($return->num_rows > 0) {
            return $return->fetch_all(MYSQLI_ASSOC);
        }

        return false;
    }
} 
?>