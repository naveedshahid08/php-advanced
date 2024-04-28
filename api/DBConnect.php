<?php 

class DBConnect {
    private $server='db';
    private $dbname = 'fullstackapp';
    private $user ='root';
    private $pass = 'lionPass';

    public function  connect() {
        try {
            // PDO is a class and $conn is an object from it.
          $conn = new PDO ('mysql:host=' .$this->server .'; dbname=' . $this->dbname,
          $this->user, $this->pass);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $conn;
        } catch (\PDOException $e) {
          echo "Database Error: " . $e->getMessage();
        }
      }
}