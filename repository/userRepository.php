<?php
class UserRepository
{
    public function listUsers($conn)
    {
        $sql = "SELECT * FROM usuarios a";
            
        $return = $conn->query($sql);

        if ($return->num_rows > 0) {
            return $return->fetch_all(MYSQLI_ASSOC);
        }

        return false;
    }

    public function deleteUser($conn, $id)
    {
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
        
        if (!$stmt) {
            return false; 
        }

        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    public function insertUser($conn, $name)
    {
        $stmt = $conn->prepare("INSERT INTO usuarios (nome) VALUES (?)");
    
        if (!$stmt) {
            return false; 
        }
    
        $stmt->bind_param("s", $name);
        $result = $stmt->execute();
        $stmt->close();
    
        return $result;       
    }

    public function updateUser($conn, $params)
    {
        $stmt = $conn->prepare("UPDATE usuarios SET nome = ? WHERE id = ?");
        
        if (!$stmt) {
            return false; 
        }

        $stmt->bind_param("si", $params['name'], $params['register_id']);
        $result = $stmt->execute();
        $stmt->close();
        
        return $result;       
    }  
} 
?>
