<?php
class RegisterRepository 
{
    public function searchList($conn)
    {
        $sql = "SELECT b.nome as cor, 
                    c.nome as usuario,
                    a.created_at as criado_em,
                    a.updated_at as atualizado_em,
                    a.id,
                    c.id as usuario_id,
                    b.id as cor_id
                FROM registros  a
                INNER JOIN cores b ON b.id = a.cor_id 
                INNER JOIN usuarios c ON c.id = a.usuario_id ";
            
        $return = $conn->query($sql);

        if ($return->num_rows > 0) {
            return $return->fetch_all(MYSQLI_ASSOC);
        }

        return false;
    }

    public function insertRegister($conn, $params)
    {
        $stmt = $conn->prepare("INSERT INTO registros (usuario_id, cor_id) VALUES (?, ?)");
    
        if (!$stmt) {
            return false; 
        }
    
        $stmt->bind_param("ii", $params['user_id'], $params['color_id']);
    
        $result = $stmt->execute();
        $stmt->close();
    
        return $result;       
    }

    public function deleteRegister($conn, $id)
    {
        $stmt = $conn->prepare("DELETE FROM registros WHERE id = ?");
        
        if (!$stmt) {
            return false; 
        }

        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    public function updateRegister($conn, $params)
    {
        $stmt = $conn->prepare("UPDATE registros SET usuario_id = ?, cor_id = ? WHERE id = ?");
        
        if (!$stmt) {
            return false; 
        }

        $stmt->bind_param("iii", $params['user_id'], $params['color_id'], $params['register_id']);
        $result = $stmt->execute();
        $stmt->close();
        
        return $result;       
    }    
    
} 
?>