<?php session_start(); ?>
<?php require_once "db.php"; ?>

<?php

if (isset($_POST['edit'])) {
  var_dump($_POST);
  $editID = intval(trim(htmlentities($_POST['edit'])));
  $editInput1 = trim(htmlentities($_POST['editInput1']));
  $editInput2 = trim(htmlentities($_POST['editInput2']));

  $query = $db->prepare("UPDATE modal_data SET input1=?, input2=? WHERE id=?");
  $query->bind_param("ssi", $editInput1, $editInput2, $editID);
  if ($query->execute()) {
    $_SESSION['msg'] = '<div class="alert alert-warning text-center alertFadeout"><strong>Podatak izmijenjen.</strong></div>';
    header("Location: .");
  } else {
    $_SESSION['msg'] = '<div class="alert alert-warning text-center alertFadeout"><strong>Greška.</strong></div>';
    header("Location: .");
  }
}

?>