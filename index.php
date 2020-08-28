<?php require 'premades/head.php' ?>

<!-- LOGIN MODAL -->

<div class="modal fade" id="logowanie">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Zaloguj się!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="action.php">
            <?php if (isset($_SESSION['loginerror'])) { ?>
              <div class="form-group text-danger" id="error-message">
                <p><?php echo $_SESSION['loginerror']; ?></p>
              </div>
            <?php } unset($_SESSION['loginerror']); ?>
          <div class="form-group">
            <input type="text" class="form-control" id="input-username" name="Username" placeholder="Nazwa użytkownika" required value="<?php echo isset($_SESSION['LastData']['Username']) ? $_SESSION['LastData']['Username'] : '' ?>">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="input-haslo" name="Password" placeholder="Hasło" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij okno</button>
            <input type="hidden" name="do" value="login">
            <button type="submit" class="btn btn-success">Zaloguj</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- LOGIN MODAL -->


<!-- ADD ARTICLE MODAL -->
<div class="modal fade" id="add_news">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:black;" id="exampleModalLabel">Dodaj nowy artykuł!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="action.php">
            <?php if (isset($_SESSION['add_news_error'])) { ?>
              <div class="form-group text-danger" id="error-message">
                <p><?php echo $_SESSION['add_news_error']; ?></p>
              </div>
            <?php } unset($_SESSION['add_news_error']); ?>
          <div class="form-group">
            <label for="input-title" style="color:black;" class="col-form-label">Tytuł artykułu: </label>
            <input type="text" class="form-control" id="input-title" name="Title" required value="<?php echo isset($_SESSION['LastData']['Title']) ? $_SESSION['LastData']['Title'] : '' ?>">
          </div>
          <div class="form-group">
            <label for="input-description" style="color:black;" class="col-form-label">Treść artykułu: </label>
            <textarea class="form-control" id="input-description" cols="30" rows="8" name="Description" required value=""><?php echo isset($_SESSION['LastData']['Description']) ? $_SESSION['LastData']['Description'] : '' ?></textarea>
          </div>
          <div class="form-group">
          <label for="select-authors" style="color:black;">Wybierz innych autorów odpowiedzialnych za artykuł:(można wiele)</label>
          <select multiple class="form-control" id="select-authors" name="Authors[]">
            <?php $tmp = "SELECT * FROM `Author`";
                  $result = $db_conn->query($tmp);
                  while($row = $result->fetch_assoc())
                  {
                    echo '<option value="'.$row['AuthorID'].'">'.$row['Name'].' '.$row['Surname'].'</option>';
                  }?>
          </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij okno</button>
            <input type="hidden" name="do" value="add_news">
            <button type="submit" class="btn btn-success">Dodaj artykuł</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- ADD ARTICLE MODAL -->


<!-- SUCCESS MODAL -->

<div class="modal" id="sukces">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:green;">Witaj <?php echo $_SESSION['user']['Name']. ' ' . $_SESSION['user']['Surname'];?>! Pomyślnie zalogowano!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
<body id="index">

  <!-- SUCCESS MODAL -->


  <!-- SUCCESS NEWS MODAL -->

  <div class="modal" id="sukces_news">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="color:green;">Pomyślnie dodano newsa!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <body id="index">

    <!-- SUCCESS NEWS MODAL -->


    <!-- FAILED TO REMOVE NEWS MODAL -->

    <div class="modal" id="remove_news_danger">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="color:red;">Nie udało się usunąć artykułu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <body id="index">

      <!-- FAILED TO REMOVE NEWS MODAL -->


      <!-- SUCCESS REMOVE NEWS MODAL -->

      <div class="modal" id="remove_news_success">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" style="color:green;">Pomyślnie usunięto newsa!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>

        <!-- SUCCESS REMOVE NEWS MODAL -->


  <body id="index">


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

<div class="container" id="index">

  <!--CAROUSEL WITH 3 NEWEST POSTS-->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/news1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tekst pierwszego newsa</h5>
          <p>krotki opis</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/news2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tekst drugiego newsa</h5>
          <p>krotki opis</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/news3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tekst trzeciego newsa</h5>
          <p>krotki opis</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--CAROUSEL WITH 3 NEWEST POSTS-->


  <!--NEWS BELOW CAROUSEL -->

<div class="container" id="news">
  <?php $stmt = "SELECT * FROM `News`";
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

  <!--NEWS BELOW CAROUSEL -->


<!--SKRYPTY-->

<?php unset($_SESSION['LastData']); ?>
<script type="text/javascript">
  <?php if(isset($_GET['logowanie']))
  { if($_GET['logowanie']=="false"){?>
    $('#logowanie').modal('show');
    <?php }else if($_GET['logowanie']=="true"){ ?>
      $('#sukces').modal('show');
      <?php }} ?>
</script>

<script type="text/javascript">
  <?php if(isset($_GET['add_news']))
  { if($_GET['add_news']=="false"){?>
    $('#add_news').modal('show');
    <?php }else if($_GET['add_news']=="true"){ ?>
      $('#sukces_news').modal('show');
      <?php }} ?>
</script>

<script type="text/javascript">
  <?php if(isset($_GET['remove_news']))
  { if($_GET['remove_news']=="false"){?>
    $('#remove_news_danger').modal('show');
    <?php }else if($_GET['remove_news']=="true"){ ?>
      $('#remove_news_success').modal('show');
      <?php }} ?>
</script>

<!--SKRYPTY-->

</body>
</html>
