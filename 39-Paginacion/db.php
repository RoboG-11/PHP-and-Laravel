<?php

class DB
{
  private $host;
  private $db;
  private $user;
  private $password;
  private $charset;

  public function __construct()
  {
    $this->host     = 'localhost:3308';
    $this->db       = 'xtra';
    $this->user     = 'root';
    $this->password = "NegritO2001";
    $this->charset  = 'utf8mb4';
  }

  function connect()
  {
    try {

      $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
      $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES   => false,
      ];
      $pdo = new PDO($connection, $this->user, $this->password, $options);

      return $pdo;
    } catch (PDOException $e) {
      print_r('Error connection: ' . $e->getMessage());
    }
  }
}
