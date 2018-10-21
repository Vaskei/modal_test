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
    $_SESSION['msg'] = '<span class="alertFadeout text-success">Podatak izmijenjen.</span>';
    header("Location: .");
  } else {
    $_SESSION['msg'] = '<span class="alertFadeout text-danger">Greška.</span>';
    header("Location: .");
  }
}

?>