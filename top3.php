<?php require 'premades/head.php'; ?>

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

<!-- TABELA TOP 3 REDAKTORÓW -->

  <table class="table table-curved bg-dark text-center text-light mx-auto" id="tabela-redakcja">
    <thead>
      <tr class="header text-muted">
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Artykuły napisane w tym tygodniu</th>
        <th>Artykuły</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT `Author`.`Name`, `Author`.`Surname`, `Author_News`.`AuthorID`, COUNT(*) AS `count` FROM `Author` INNER JOIN `Author_News`
      ON `Author`.`AuthorID` = `Author_News`.`AuthorID` INNER JOIN `News` ON `News`.`NewsID` = `Author_News`.`NewsID` WHERE
      `News`.`Creation_Date` >= curdate() - INTERVAL DAYOFWEEK(curdate())+7 DAY GROUP BY `Author_News`.`AuthorID` ORDER BY `count` DESC LIMIT 3 ";
      $result = $db_conn->query($sql);
      while($row=$result->fetch_assoc())
      {
        echo '<tr>';
        echo '<td>';
        echo $row["Name"];
        echo '</td>';
        echo '<td>';
        echo $row["Surname"];
        echo '</td>';
        echo '<td>';
        echo $row["count"];
        echo '</td>';
        echo '<td>';
        echo '<a href="autor.php?id='.$row['AuthorID'].'" class="btn btn-sm btn-primary">Wszystkie artykuły</a>';
        echo '</td>';
        echo '</tr>';
      }?>
</div>

<!-- TABELA TOP 3 REDAKTORÓW -->


<!--SKRYPTY -->

<script type="text/javascript">
  <?php if(isset($_GET['logowanie']))
  { if($_GET['logowanie']=="false"){?>
    $('#logowanie').modal('show');
    <?php }else if($_GET['logowanie']=="true"){ ?>
      $('#sukces').modal('show');
      <?php }} ?>
</script>

<!--SKRYPTY -->

</body>


</html>
