<?php

class Dao{
      private $host = "us-cdbr-iron-east-03.cleardb.net";
      private $db = "heroku_859fd3a9fcdab04";
      private $user = "bdd21646e8463c";
      private $pass = "085f2cbe";
    
    public function getConnection () {
        
        try {
          $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
                $this->pass);
        } catch (Exception $e) {
          echo "issue with the connections";
           exit;
        }
        return $conn;
    }

        public function save($name,$email,$availability,$comment,$classes){
        try{
        $conn= $this->getConnection();
        }catch(Exception $e){
            echo e;
        }
        $saveQuery = "insert into request (name,contactinfo,availability,comment,class) values (:name,:email,:availability,:comment,:classes) ";
        $q=$conn->prepare($saveQuery); 
            
        $q->bindParam(":email", $email);
        $q->bindParam(":name", $name);
        $q->bindParam(":availability", $availability);
        $q->bindParam(":comment", $comment);
        $q->bindParam(":classes", $classes);


        $q->execute();
    }
    public function getRequest() {
        $conn = $this->getConnection();
         return $conn->query("select name,contactinfo,availability, class, comment from request");
    }
}


?>