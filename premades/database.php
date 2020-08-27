<?php
  session_start();
  $db_host = 'localhost';
  $db_username = 'root';
  $db_password = '';
  $db_database = 'articles';

  $db_conn = new mysqli($db_host, $db_username, $db_password, $db_database);

  if ($db_conn->connect_error) {
        die('Problem z bazą danych');
    }

?>
