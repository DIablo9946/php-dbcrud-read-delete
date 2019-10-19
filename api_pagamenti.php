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

  $pagamenti = [];
  $query = "SELECT *
            FROM pagamenti
            WHERE id >= 100";

  $res = $conn -> query($query);

  if ($res && $res -> num_rows > 0) {


        while($row = $res -> fetch_assoc()) {

          $pagamenti[] = $row;
        }
      };





  echo json_encode($pagamenti);

  $conn->close();

?>
