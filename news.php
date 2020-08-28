<?php require 'premades/head.php';

$stmt = $db_conn->prepare("SELECT * FROM `News` WHERE `NewsID` = ?");
	$stmt->bind_param("i", $_GET['id']);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
?>


<!-- MODAL EDYTOWANIA -->

<div class="modal fade" id="Edit_News">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"style="color:black;" id="exampleModalLabel">Edycja artykułu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="action.php">
          <div class="form-group">
            <label for="input-title" style="color:black;" class="col-form-label">Tytuł:</label>
            <input type="text" class="form-control" id="input-title" name="Title" required value="<?php echo isset($_SESSION['LastData']['Title']) ? $_SESSION['LastData']['Title'] : '' ?>">
          </div>
          <div class="form-group">
            <label for="input-description" style="color:black;" class="col-form-label">Treść artykułu:</label>
            <textarea class="form-control" id="input-description" cols="30" rows="8" name="Description" required value="<?php echo isset($_SESSION['LastData']['Description']) ? $_SESSION['LastData']['Description'] : '' ?>"></textarea>
          </div>
            <input type="hidden" id="edit-id" name="edit-id">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij okno</button>
            <input type="hidden" name="do" value="edit_news">
            <button type="submit" class="btn btn-success">Edytuj</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- MODAL EDYTOWANIA -->


<!-- MODAL USUWANIA -->

<div class="modal fade" id="Remove_News">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color:black;" class="modal-title">Usuwanie artykułu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="action.php">
      <div style="color:black;" class="modal-body">
      </div>
      <div class="modal-footer">
        <input type="hidden" id="remove-id" name="remove-id">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij okno</button>
        <input type="hidden" name="do" value="remove_news">
        <button type="submit" class="btn btn-danger">Usuń</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- MODAL USUWANIA -->


<!-- MODAL SUKCESU EDYTOWANIA -->

<div class="modal" id="success_edit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:green;">Pomyślnie edytowano newsa!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL USUWANIA -->


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


<!-- WYŚWIETLANIE ARTYKUŁU -->

<body id="index">
<div class="container" id="article">
  <div class="row">
    <div class="col-10">
      <img class="pt-2 mx-auto d-block w-100" src="<?=$row['tmp_img_src']?>">
      <h1 class="text-left mb-4 mt-2"> <?= $row['Title'];?></h1>
      <p class="text-left"> <?= nl2br($row['Description']);?></p>
    </div>
    <div class="col-2">
<?php
if(isset($_SESSION['user']))
{
echo '<button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#Edit_News" data-id='.$row['NewsID'].'>Edytuj</button>';
echo '<br>';
echo '<button type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#Remove_News" data-id='.$row['NewsID'].'>Usuń</button>';
}
?>
</div>
</div>

<!-- WYŚWIETLANIE ARTYKUŁU -->


<!--SKRYPTY-->

<script type="text/javascript">
  $('#Edit_News').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget); // Button that triggered the modal
    let id = button.data('id');
    let title = button.parent().prev().children().prev().text();
    let description = button.parent().prev().children().next().next().text();
    let modal = $(this);
    modal.find('.modal-body input#edit-id').val(id);
    modal.find('.modal-body input#input-title').val(title);
    modal.find('.modal-body textarea#input-description').val(description);
  });
</script>

<script type="text/javascript">
  <?php if(isset($_GET['success']))
  { if($_GET['success']=="false"){?>
    $('#edit_news').modal('show');
    <?php }else if($_GET['success']=="true"){ ?>
      $('#success_edit').modal('show');
      <?php }} ?>
</script>

<script type="text/javascript">
  <?php if(isset($_GET['logowanie']))
  { if($_GET['logowanie']=="false"){?>
    $('#logowanie').modal('show');
    <?php }else if($_GET['logowanie']=="true"){ ?>
      $('#sukces').modal('show');
      <?php }} ?>
</script>

<script type="text/javascript">
  $('#Remove_News').on('show.bs.modal', function (event) {
  let button = $(event.relatedTarget) // Button that triggered the modal
  let id = button.data('id')
  let title = button.parent().prev().children().prev().text();
  let modal = $(this)
  modal.find('.modal-body').text('Czy napewno chcesz usunąć artykuł o tytule: ' + title)
  modal.find('.modal-footer input#remove-id').val(id)
});
</script>

<!--SKRYPTY-->
</body>
</html>
