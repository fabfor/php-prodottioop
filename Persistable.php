<?php
trait Persistable{
  public $db_table;

  /* Generalizzando la funzione save potremmo assegnare
    il trait Persistable a qualsiasi classe */
  public function save(){
    $servername = "localhost";
    $username = "root";
    $password = "asd";
    $dbname = "boolean";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO fattorini (id, nome, cognome) VALUES (NULL,'Fabio','Forg')";

    $result = $conn->query($sql);

    var_dump($result);
  }
}
?>
