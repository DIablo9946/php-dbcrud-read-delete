<?php

  header('Content-Type: application/json');

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "hoteldb";

  $conn = new mysqli($database, $username, $password, $dbname);

  if ($conn -> connect_error){
    var_dump("error");
    var_dump($conn);
    die();
  };

  $id = $_GET["id"];
  $pagamenti = [];
  $query = "DELETE
            FROM pagamenti
            WHERE id=" . $id . "";

  $res = $conn -> query($query);





  echo json_encode($res);

  $conn->close();

?>
