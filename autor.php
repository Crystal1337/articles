<?php require 'premades/head.php';
$stmt = $db_conn->prepare("SELECT * FROM `Author` WHERE `AuthorID` = ?");
	$stmt->bind_param("i", $_GET['id']);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
 ?>

<!--NAVBAR-->

<?php
if(isset($_SESSION['user']))
{
require_once 'navs/logged.php';
}
else
{
require_once 'navs/guest.php';
}
?>

<!--NAVBAR-->

<body id="index">


<div class="container" id="article">
  <h2 class="text-center pt-2"> Wszystkie artykuły redaktora: <?= $row['Name'].' '.$row["Surname"];?></h2>
  <?php $stmt = "SELECT * FROM `News` INNER JOIN `Author_News` ON `Author_News`.`NewsID`=`News`.`NewsID` INNER JOIN `Author` ON `Author`.`AuthorID`=`Author_News`.`AuthorID` WHERE `Author`.`AuthorID` = {$_GET['id']}";
  $result = $db_conn->query($stmt);
  $amount=0;
  while($news = $result->fetch_assoc())
  {
    if($amount % 2 == 0)
    {
      echo '<div class="row pt-2">';
    }
    echo '<div class="col-6">';
    echo '<a id="news" href="news.php?id='.$news['NewsID'].'">';
    echo '<img class="d-block w-100" style="height: 340px" src="'.$news['tmp_img_src'].'">';
    echo '<h3>'.$news['Title'].'</h3>';
    echo '</a>';
    echo '<div class="row">';
    echo '<div class="col">';
    echo '<i class="fas fa-book-open mr-2"></i>';
    $tmp = "SELECT * FROM `Author_News` INNER JOIN `Author` ON `Author_News`.`AuthorID`=`Author`.`AuthorID` WHERE `Author_News`.`NewsID`={$news['NewsID']}";
    $tmpresult = $db_conn->query($tmp);
    $authorstmp = "";
    while($authors = $tmpresult->fetch_assoc())
    {
      $authorstmp .= $authors['Name'];
      $authorstmp .= ' & ';
    }
    $authorstmp = substr($authorstmp, 0, -2);
    echo $authorstmp;
    echo '</div>';
    echo '<div class="col">';
    echo '<p class="text-right">'. $news['Creation_Date'].'</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    if($amount % 2 == 1)
    {
      echo '</div>';
    }
    $amount++;
  }?>

</div>


<script type="text/javascript">
  <?php if(isset($_GET['logowanie']))
  { if($_GET['logowanie']=="false"){?>
    $('#logowanie').modal('show');
    <?php }else if($_GET['logowanie']=="true"){ ?>
      $('#sukces').modal('show');
      <?php }} ?>
</script>

</body>

</html>
