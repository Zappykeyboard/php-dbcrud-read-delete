<?php
  header('COntent-type: application/json');


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

  $query = '
  SELECT * 
  FROM pagamenti
  WHERE id >= 100
  ';

  $res = $connection ->query($query);

  $connection -> close();

  echo json_encode($res);
?>