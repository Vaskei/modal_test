$(".alertFadeout").delay(2000).fadeOut();

$(document).ready(function () {
  $('#editModal').on('show.bs.modal', function (e) {
    console.log(e);
    var rowid = $(e.relatedTarget).data('id');
    console.log(rowid);
    $.ajax({
      type: 'post',
      url: 'fetch.php', //Here you will fetch records 
      data: 'rowid=' + rowid, //Pass $id
      dataType: 'json',
      success: function (data) {
        $('#editInput1').val(data.input1);
        $('#editInput2').val(data.input2);
        $('#editSubmit').val(data.id);
        console.log(data);
      }
    });
  });
  $('#editModal').on('hide.bs.modal', function (e) {
    console.log("modal hidden");
    $('#editInput1').val("");
    $('#editInput2').val("");
    $('#editSubmit').val("");
  });
  $('#deleteModal2').on('show.bs.modal', function (e) {
    console.log(e);
    var rowid = $(e.relatedTarget).data('id');
    console.log(rowid);
    $.ajax({
      type: 'post',
      url: 'fetch.php', //Here you will fetch records 
      data: 'rowid=' + rowid, //Pass $id
      dataType: 'json',
      success: function (data) {
        $('#deleteInput').text(data.input1 + " " + data.input2);
        $('#deleteSubmit').val(data.id);
        // $('#editInput2').val(data.input2);

        // $('.fetched-data').html(data);//Show fetched data from database
        console.log(data);
      }
    });
  });
  $('#deleteModal2').on('hide.bs.modal', function (e) {
    console.log("delete hidden");
    $('#deleteInput').text("");
  });
  // $('#deleteModal').on('click', '.btn-ok', function (e) {
  //   console.log(e);
  //   var $modalDiv = $(e.delegateTarget);
  //   //console.log($modalDiv);
  //   var id = $(this).data('recordId');
  //   //console.log(id);
  //   // $.post('delete.php/'+id).then(function () {
  //   //     $modalDiv.modal('hide');
  //   // });
  //   $.ajax({
  //     type: 'post',
  //     url: 'delete.php',
  //     data: 'deleteID=' + id,
  //     dataType: 'json',
  //     success: function (data) {
  //       window.location.reload();
  //     }
  //   }).then(function () {
  //     $modalDiv.modal('hide');
  //   });
  // });
  // $('#deleteModal').on('show.bs.modal', function (e) {
  //   var data = $(e.relatedTarget).data();
  //   //console.log(data);
  //   //console.log($(e));
  //   $('.title', this).text('Deleting ' + data.recordTitle);
  //   $('.btn-ok', this).data('recordId', data.id);
  // });
  // //   $('#deleteModal').on('show.bs.modal', function (e) {
  // //   console.log(e);
  // //   var rowid = $(e.relatedTarget).data('id');
  // //   console.log(rowid);
  // //   //$.post('delete.php', { 'rowid': rowid });
  // //   $.ajax({
  // //     type: 'post',
  // //     url: 'delete.php', //Here you will fetch records 
  // //     data: 'rowid=' + rowid, //Pass $id
  // //     dataType: 'json',
  // //     success: function (data) {
  // //       console.log(data);
  // //     }
  // //   });
  // // });
});


