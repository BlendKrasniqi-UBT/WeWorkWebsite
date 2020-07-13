<?php

class Home {
  public $connection;
  public $result;
  public $row;
  public $query;

  public function FeaturesTitle() {
    $this->connection = new DBConnection();
    $this->query = "SELECT featuresmaintitle FROM features";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["featuresmaintitle"]);
        }
      }
  }

  public function FeatureTitleOne() {
    $this->connection = new DBConnection();
    $this->query = "SELECT featuretitleone FROM features";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["featuretitleone"]);
        }
      }
  }




}
