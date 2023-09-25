<?php

class Connect {
    private $host = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $dbname = "php";
    private $table_name = "student";
    private $res ;

    public function connect(){
        $this->res = mysqli_connect(
            $this->host,$this->username,$this->password,$this->dbname
        );
        if($this->res){
            echo "connected...";
        }
        else{
            echo "not connected yet..";
        }
    } 

    public function getrecord (){
        $query = "SELECT * FROM $this->table_name";
        
        return mysqli_query($this->res,$query);
    }

    public function insert ($name,$age,$course){
        $res1 = mysqli_query($this->res,"INSERT INTO $this->table_name(name,age,course) VALUES('$name,$age,$course');");
        if($res1){
            echo "Inserted Succesfully";
        }
        else{
            echo "Inserted Failed..";
        }
    }
    
}
?>  