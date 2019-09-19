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

  $id = $_GET['id'];
  $price = $_GET['price'];

  $query = "
  UPDATE pagamenti
  SET price = " . $price . "
  WHERE id = " . $id . "";


  $res = $connection ->query($query);

  $connection -> close();

  echo json_encode($res);
?>