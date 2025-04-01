<?php
class User 
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
} 
?>
