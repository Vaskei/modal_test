<?php session_start(); ?>
<?php require_once "db.php"; ?>
<?php
function displayMsgLeft()
{
  if (isset($_SESSION['msg']) && $_SESSION['msg'] != '') {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
}
function displayMsgRight()
{
  if (isset($_SESSION['msg']) && $_SESSION['msg'] != '') {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">

    <!-- Button trigger modal -->
    <div class="text-center mt-5">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Insert data
      </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Test Input</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="insert.php" method="POST">
              <div class="form-group">
                <label for="testInput1">Test Input 1</label>
                <input type="text" class="form-control" id="testInput1" name="input1" placeholder="">
              </div>
              <div class="form-group">
                <label for="testInput2">Test Input 2</label>
                <input type="text" class="form-control" id="testInput2" name="input2" placeholder="">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Test Input</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="update.php" method="POST">
              <div class="form-group">
                <label for="editInput1">Test Input 1</label>
                <input type="text" class="form-control" id="editInput1" name="editInput1" placeholder="" value="">
              </div>
              <div class="form-group">
                <label for="editInput2">Test Input 2</label>
                <input type="text" class="form-control" id="editInput2" name="editInput2" placeholder="" value="">
              </div>
              <div class="modal-footer pb-0 pr-0">
                <button type="submit" class="btn btn-primary" id="editSubmit" name="edit">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>


    <!-- Delete Modal STEKA-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Deleting Record</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h6 class="title"></h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-ok">Delete</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Modal V2 RADI-->
    <div class="modal fade" id="deleteModal2" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModal2Label">Deleting Data.</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="delete.php" method="POST">
              <div class="form-group">
                <label for="editInput1">Delete this data? <span id="deleteInput"></span></label>
              </div>
              <div class="modal-footer pb-0 pr-0">
                <button type="submit" class="btn btn-primary" id="deleteSubmit" name="delete">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="container text-center mt-5">
      <h1 class="mb-0">
        Data
      </h1>
      <span class="lead p-2 font-weight-bold"><?php displayMsgRight(); ?></span>

      <table class="table table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Input 1</th>
            <th>Input 2</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          $query = "SELECT * FROM modal_data";
          $result = $db->query($query);
          if ($result) {
            while ($row = $result->fetch_assoc()) {
          //var_dump($row);
              $id = $row['id'];
              $input1 = $row['input1'];
              $input2 = $row['input2'];
              ?>

          <tr>
            <td style="width:15%">
              <?php echo $id; ?>
            </td>
            <td style="width:35%">
              <?php echo $input1; ?>
            </td>
            <td style="width:35%">
              <?php echo $input2; ?>
            </td>
            <td style="width:15%">
              <?php echo "<div class='btn-group' role='group'>
                          <button type='button' class='btn btn-info btn-table' data-toggle='modal' data-target='#editModal' data-id='" . $id . "'>Edit</button>
                          <button type='button' class='btn btn-danger btn-table' data-toggle='modal' data-target='#deleteModal2' data-id='" . $id . "' data-record-title='" . $input1 . " " . $input2 . "'>Delete</button>
                        </div>" ?>
            </td>
          </tr>

          <?php

        }
      }
      ?>

        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
    <script src="api.js"></script>
</body>

</html>