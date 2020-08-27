<?php require 'premades/head.php' ?>

<!-- MODAL LOGOWANIA -->

<div class="modal fade" id="logowanie" tabindex="-1" role="dialog">
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

<!-- MODAL LOGOWANIA -->

<body id="index">
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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand ml-5 font-weight-bold" href="index.php">
    <img src="img/nav_icon.png" width="30" height="30">
    News site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Strona główna</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Newsy</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Nasza redakcja</a>
      </li>
    </ul>
      <ul class="navbar-nav mr-3">
    <li class="nav-item" id="logowanie">
        <a class="nav-link" data-toggle="modal" style="color:green;" data-target="#logowanie" href="#"><i class="mr-2 fas fa-sign-in-alt"></i>Logowanie</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--NAVBAR-->

<div class="container" id="index">

  <!--CAROUSEL-->

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

  <!--CAROUSEL-->
<div class="container" id="news">
  <div class="row">
    <div class="col mt-2">
      <img class="d-block w-100" style="height: 340px" src="img/news4.jpg">
      <h3>blabla</h3>
    </div>
    <div class="col mt-2">
      <img class="d-block w-100" style="height: 340px" src="img/news5.jpg">
      <h3>blabla</h3>
    </div>
  </div>
  <div class="row">
    <div class="col mt-2">
      <div class="row">
        <div class="col">
          <p>Postujacy:</p>
        </div>
        <div class="col">
          <p>Data:</p>
        </div>
      </div>
    </div>
    <div class="col mt-2">
      <div class="row">
        <div class="col">
          <p>Postujacy:</p>
        </div>
        <div class="col">
          <p>Data:</p>
        </div>
    </div>
  </div>
</div>
</div>

<?php unset($_SESSION['LastData']); ?>
<script type="text/javascript">
  <?php if(isset($_GET['logowanie']))
  { ?>
    $('#logowanie').modal('show');
    <?php } ?>
</script>
</body>
</html>
