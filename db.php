<?php

class db{
      private $host = "";
      private $db = "";
      private $user = "";
      private $pass = "";
    
    
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
    
    public function saveRequest($name, $class, $availability, $contactinfo, $comments) {
        $conn = $this->getConnection();
        $saveQuery = "insert into request (name, class, availability, contactinfo, comments) values (:name, :class, :availability, :contactinfo, :comments)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":name", $name);
        $q->bindParam(":class", $class);
        $q->bindParam(":availability", $availability);
        $q->bindParam(":contactinfo", $contactinfo);
        $q->bindParam(":comments", $comments);
        
        $q->execute();
    }
    
    public function getRequest() {
        $conn = $this->getConnection();
        return $conn->query("select name, class, availability, contactinfo, comments from request order by postDate desc");
        
    }
    
    public function getComments () {
        $conn = $this->getConnection();
        return $conn->query("select name, number from number order by name desc");
  }
    
      public function saveComment ($name, $number) {
        
        $conn = $this->getConnection();
        $saveQuery = "insert into classes (name, number) values (:name, :number)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":name", $name);
        $q->bindParam(":number", $number);
        $q->execute();
  }
}


?>