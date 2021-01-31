<?php 


class DBconnector
{   private $serverName ;
    private $userName ;
    private $password ;
    private $dbname ;
    private $conn ;

    public function __construct($username = '', $password = '', $dbName = '', $host = '')
    {
        try{    $this->serverName = $host ;
                $this->userName = $username ;
                $this->password = $password ;
                $this->dbname = $dbName ;  
                $this->conn = new PDO ("mysql:host=$this->serverName;dbname=$this->dbname" , $this->userName, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Failed to connect " . $e->getMessage();
        }
    }


    public function insert($sql, $array)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($array);

    }
    public function display($sql)
    {
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query ;
    }
    // public function update($sql, $array)
    // {
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute($array);

    // }
    public function delete($id, $sql)
    {   
            $count=$this->conn->prepare($sql); 
            $count->bindParam(":id",$id,PDO::PARAM_INT);
            $count->execute();

    }
}

?>