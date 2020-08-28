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
            	header("Location: index.php?logowanie=true");
            }
            else
            {
            	$_SESSION['loginerror'] = 'Podane hasło lub nazwa użytkownika jest nieprawidłowe';
              header("Location: index.php?logowanie=false");
            }
            }
            else
            {
            	$_SESSION['loginerror'] = 'Podane hasło lub nazwa użytkownika jest nieprawidłowe';
              header("Location: index.php?logowanie=false");
            }
        }
        else
        {
        	$_SESSION['loginerror'] = 'Wprowadź wszystkie dane';
          header("Location: index.php?logowanie=false");
        }
        break;

      case "LOGOUT":
      unset($_SESSION['user']);
      header("Location: index.php");
      break;

      case "ADD_NEWS":
      $_SESSION['LastData'] = $_POST;
      if(!empty($_POST['Title']) && !empty($_POST['Description']))
      {
        $stmt = $db_conn->prepare("INSERT INTO `News` VALUES (NULL, ?, ?, ?, ?)");
        $date = date("Y-m-d");
        $text = "img/news";
        $number = 0;
        $number = rand(1,5);
        $jpg = ".jpg";
        $str = "";
        $str .= $text;
        $str .= $number;
        $str .= $jpg;
        $stmt->bind_param("ssss", $_POST['Title'], $_POST['Description'], $date, $str);
        if($stmt->execute())
        {
          $last_id = mysqli_insert_id($db_conn);
          $stmt1 = $db_conn->prepare("INSERT INTO `Author_News` VALUES (NULL, ?, ?)");
          $stmt1->bind_param("ii", $_SESSION['user']['AuthorID'], $last_id);
          if($stmt1->execute())
          {
            if(!empty($_POST['Authors']))
            {
              $stmt2 = $db_conn->prepare("INSERT INTO `Author_News` VALUES (NULL, ?, ?)");
              foreach($_POST['Authors'] as $authors)
              {
                $stmt2->bind_param("ii", $authors, $last_id);
                $stmt2->execute();
              }
            }
          }
          unset($_SESSION['LastData']);
          header("Location: index.php?add_news=true");
        }
        else
        {
          $_SESSION['add_news_error'] = "Błędnie podane dane.";
        }
      }
      else
      {
        $_SESSION['add_news_error'] = "Wprowadź dane";
        header("Location: index.php?add_news=false");
      }
      break;

      case "EDIT_NEWS":
      $_SESSION['LastData'] = $_POST;
      if(!empty($_POST['Title']) && !empty($_POST['Description']))
      {
        $stmt = $db_conn->prepare("UPDATE `News` SET `Title` = ?, `Description` = ? WHERE `NewsID` = ?");
        $stmt->bind_param("ssi", $_POST['Title'], $_POST['Description'], $_POST['edit-id']);
        if($stmt->execute())
        {
          unset($_SESSION['LastData']);
          header("Location: news.php?id={$_POST['edit-id']}&success=true");
        }
        else
        {
          $_SESSION['edit_news_error'] = "Wystąpił błąd podczas edytowania artykułu";
          header("Location: news.php?id={$_POST['edit-id']}&success=false");
        }
      }
      else
      {
        $_SESSION['edit_news_error'] = "Wprowadź wszystkie dane";
        header("Location: news.php?id={$_POST['edit-id']}&success=false");
      }
      break;

      case "REMOVE_NEWS":
      $stmt = $db_conn->prepare("DELETE FROM `News` WHERE `NewsID` = ?");
      $stmt->bind_param("i", $_POST['remove-id']);
      $stmt1 = $db_conn->prepare("DELETE FROM `Author_News` WHERE `NewsID` = ?");
      $stmt1->bind_param("i", $_POST['remove-id']);
      if($stmt1->execute())
      {
        if($stmt->execute())
        {
          header("Location: index.php?remove_news=true");
        }
      }
      else {
        header("Location: index.php?remove_news=false");
      }
  }
?>
