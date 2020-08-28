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
      <a class="nav-link" href="index.php">Strona główna</a>
    </li>
    <li class="nav-item ml-3">
      <a class="nav-link" href="redakcja.php">Nasza redakcja</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
    <ul class="navbar-nav mr-3">
  <li class="nav-item">
      <a class="nav-link" data-toggle="modal" style="color:green;" data-target="#logowanie" href="#"><i class="mr-2 fas fa-sign-in-alt"></i>Logowanie</a>
    </li>
  </ul>
</div>
</nav>
