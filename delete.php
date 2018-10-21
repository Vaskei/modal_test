<?php session_start(); ?>
<?php require_once "db.php"; ?>

<?php


if (isset($_POST['delete'])) {
  var_dump($_POST);
  $deleteID = intval(trim(htmlentities($_POST["delete"])));
  $query = $db->prepare("DELETE FROM modal_data WHERE id=?");
  $query->bind_param("i", $deleteID);
  if ($query->execute()) {
    $_SESSION['msg'] = '<span class="alertFadeout text-warning">Podatak izbrisan.</span>';
    header("Location: .");
  } else {
    $_SESSION['msg'] = '<span class="alertFadeout text-danger">Greška.</span>';
    header("Location: .");
  }
}

// if (isset($_POST['deleteID'])) {
//   $id = intval($_POST["deleteID"]);
//   $query = $db->prepare("DELETE FROM modal_data WHERE id=?");
//   $query->bind_param("i", $id);
//   if ($query->execute()) {
//     echo json_encode("DELETED RECORD WITH ID: " . $id);
//       // $_SESSION['msg'] = '<small class="text-danger alertFadeout"><strong>KATEGORIJA OBRISANA.</strong></small>';
//       // header("Location: ./categories");
//   } else {
//     echo json_encode("ERROR");
//       // $_SESSION['msg'] = '<small class="text-warning alertFadeout"><strong>GREŠKA!</strong></small>';
//       // header("Location: ./categories");
//   }
// }

?>