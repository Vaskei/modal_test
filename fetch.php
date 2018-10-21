<?php require_once "db.php"; ?>
<?php

if (isset($_POST["rowid"])) {
  $id = intval($_POST["rowid"]);
  $query = $db->prepare("SELECT * FROM modal_data WHERE id=? LIMIT 1");
  $query->bind_param("i", $id);
  if ($query->execute()) {
      $result = $query->get_result();
      //var_dump($result);
      $row = $result->fetch_assoc();
      //var_dump($row);
      // $input1Edit = $row["input1"];
      // $input2Edit = $row["input2"];
      //var_dump($_SESSION);
      echo json_encode($row);
  }
}

?>