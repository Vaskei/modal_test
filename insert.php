<?php session_start(); ?>
<?php require_once "db.php"; ?>

<?php

if (isset($_POST['submit'])) {
  //var_dump($_POST);
  //echo "SUBMIT!";
  $input1 = trim(htmlentities($_POST['input1']));
  $input2 = trim(htmlentities($_POST['input2']));

  $query = $db->prepare("INSERT INTO modal_data (input1, input2) VALUES (?, ?)");
  $query->bind_param("ss", $input1, $input2);
  if ($query->execute()) {
    $_SESSION['msg'] = '<div class="alert alert-warning text-center alertFadeout"><strong>Podatak unesen.</strong></div>';
    header("Location: .");
  } else {
    $_SESSION['msg'] = '<div class="alert alert-warning text-center alertFadeout"><strong>Greška.</strong></div>';
    header("Location: .");
  }
}

?>