<?php
  header('Content-type: application/json');


  $serverName = 'localhost';
  $dbUser = 'root';
  $dbPass = 'root';
  $dbName = 'HotelDB';

  $connection = new mysqli($serverName, $dbUser, $dbPass, $dbName);

  if ($connection -> connect_error){
    var_dump('error');
    var_dump($connection);
    die();
  }

  $status = $_GET['status'];
  $price = $_GET['price'];

  $query = "
  INSERT INTO pagamenti (status, price, prenotazione_id, pagante_id)
  VALUES ('" . $status . "', " . $price . ", 1, 1)
  ";


  $res = $connection ->query($query);

  $connection -> close();

  echo json_encode($res);
?>