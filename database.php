<?php

class Database
{
    private $mysql;
    private $sql;
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db_name = 'pixels';
    
    function __construct()
    {
        $this->mysql = mysqli_connect($this->host, $this->user, $this->password, $this->db_name) or die('Database connection error');
        mysqli_set_charset($this->mysql, 'utf8');
    }
    
    public function load_pixels( )
    {
        $sql = "SELECT * FROM pixels";
        $result = mysqli_query($this->mysql, $sql);
        while ($row = mysqli_fetch_assoc($result))
        { 
            $data[] = $row;
        }
        
        return $data;
    }
    
    public function update( $id, $status )
    {
        $sql = "UPDATE pixels SET `status` = '$status' WHERE `id`='$id'";
        $result = mysqli_query($this->mysql, $sql);
    }
}
    
//    for ($i = 1; $i <= 398; $i++)
//    {
//        $sql = "INSERT INTO pixels (colored) VALUES ( 0 )";
//        $result = mysqli_query($mysql, $sql);
//    }

?>