<?php
class ColorRepository 
{
    public function listColors($conn)
    {
        $sql = "SELECT * FROM cores a";
            
        $return = $conn->query($sql);

        if ($return->num_rows > 0) {
            return $return->fetch_all(MYSQLI_ASSOC);
        }

        return false;
    }

    public function updateColor($conn, $params)
    {
        $stmt = $conn->prepare("UPDATE cores SET nome = ? WHERE id = ?");
        
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
