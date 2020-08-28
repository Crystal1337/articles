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
            <input type="text" class="form-control" id="input-title" name="Title"
            required value="<?php echo isset($_SESSION['LastData']['Title']) ? $_SESSION['LastData']['Title'] : '' ?>">
          </div>
          <div class="form-group">
            <label for="input-description" style="color:black;" class="col-form-label">Treść artykułu: </label>
            <textarea class="form-control" id="input-description" cols="30" rows="8" name="Description"
            required value=""><?php echo isset($_SESSION['LastData']['Description']) ? $_SESSION['LastData']['Description'] : '' ?></textarea>
          </div>
          <div class="form-group">
          <label for="select-authors" style="color:black;">Wybierz innych autorów odpowiedzialnych za artykuł:(można wiele)</label>
          <select multiple class="form-control" id="select-authors" name="Authors[]">
            <?php $tmp = "SELECT * FROM `Author` WHERE `AuthorID` NOT IN ({$_SESSION['user']['AuthorID']})";
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

      <!-- SUCCESS NEWS MODAL -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<a class="navbar-brand ml-5 font-weight-bold" href="index.php">
  <img src="img/nav_icon.png" width="30" height="30">
  News site</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <li class="nav-item ml-3">
      <a class="nav-link" href="top3.php">Top 3 tygodnia</a>
    </li>
  </ul>
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
