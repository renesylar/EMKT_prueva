<?php

class connection {
public $conn;
   public function __construct() {
       $this->conn = new mysqli("localhost","root","","emkt");
   

       
   }
   public function get_connection(){
       
       return $this->conn;
       
   }
   public function close()
   {
       $this->conn->close();
   }

}
