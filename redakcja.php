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
  <table class="table table-curved bg-dark text-center text-light mx-auto" id="tabela-redakcja">
    <thead>
      <tr class="header text-muted">
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Artykuły</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT `AuthorID`, `Name`, `Surname` FROM `Author`";
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
        echo '<a href="autor.php?id='.$row['AuthorID'].'" class="btn btn-sm btn-primary">Artykuły</a>';
        echo '</td>';
        echo '</tr>';
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
