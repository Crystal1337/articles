<?php

  if (empty($_REQUEST['do']))
      {
          die('<html><body></body></html>');
      }
  require_once 'premades/database.php';

  switch (strtoupper($_REQUEST['do']))
  {
    case 'LOGIN':
        $_SESSION['LastData'] = $_POST;
        if(!empty($_POST['Username']) && !empty($_POST['Password']))
        {
        	$stmt = $db_conn->prepare("SELECT * FROM `Author` WHERE `Username` = ?");
  		    $stmt->bind_param("s", $_POST['Username']);
  		    $stmt->execute();
  		    $result = $stmt->get_result();
          if ($result->num_rows === 1)
          {
            $row = $result->fetch_assoc();
            if ($_POST['Password']==$row['Password'])
            {
			        unset($_SESSION['LastData']);
            	$_SESSION['user'] = $row;
            	redirect();
            }
            else
            {
            	$_SESSION['loginerror'] = 'Podane hasło lub nazwa użytkownika jest nieprawidłowe';
            }
            }
            else
            {
            	$_SESSION['loginerror'] = 'Podane hasło lub nazwa użytkownika jest nieprawidłowe';
            }
        }
        else
        {
        	$_SESSION['loginerror'] = 'Wprowadź wszystkie dane';
        }
        header("Location: index.php?logowanie=true");
        break;
  }
?>
