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
      <a class="nav-link" href="#">Nasza redakcja</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0 mr-5">
    <input class="form-control mr-sm-2" type="search" placeholder="Wyszukaj" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
    <ul class="navbar-nav mr-3">
      <li class="nav-item mr-3">
        <a class="nav-link" data-toggle="modal" data-target="#add_news"style="color:green;" href="#"><i class="mr-2 fas fa-plus"></i>Dodaj artykuł</a>
      </li>
  <li class="nav-item">
      <a class="nav-link" style="color:red;" href="action.php?do=logout"><i class="mr-2 fas fa-sign-out-alt"></i>Wyloguj</a>
    </li>
  </ul>
</div>
</nav>
