<?php
include_once "db.php";

class survey extends DB
{
  private $totalVotes;
  private $optionSelected;

  public function setOptionSelected($option)
  {
    $this->optionSelected = $option;
  }

  public function getOptionSelected()
  {
    return $this->optionSelected;
  }

  public function vote()
  {
    $query = $this->connect()->prepare('UPDATE lenguajes SET votos = votos + 1 WHERE lenguaje = :opcion');
    $query->execute(['opcion' => $this->optionSelected]); #Sirve para sustituir el :opcion de arriba#
  }

  public function showResults()
  {
    return $this->connect()->query('SELECT * FROM lenguajes');
  }

  public function getTotalVotes()
  {
    $query = $this->connect()->query('SELECT SUM(votos) AS votosTotales FROM lenguajes');
    $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->votosTotales;
    return $this->totalVotes;
  }

  public function getPercentageVotes($votes){
    return round(($votes / $this->totalVotes) * 100, 0);
  }
}
