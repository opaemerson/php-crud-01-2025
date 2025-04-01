<?php
class Color 
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
} 
?>
