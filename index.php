<?php
$con = mysqli_connect("localhost", "root", "mohara", "dbstudent");
$query = "select * from tableuser";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>
        <div class="container" style="width: 700px;">
            <h3 align="center">Bootstrap Modal</h3>
            <br>
            <br>
            <div align="right">
                <button name="add" id="add" data-toggle="modal" data-target="#addModal" class="btn btn-success">Add</button>
            </div>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="70%">Name</th>
                        <th width="10%">View</th>
                        <th width="10%">Edit</th>
                        <th width="10%">Delete</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['fname']; ?></td>
                            <td><input type="button" name="view" value="view" class="btn btn-info btn-xs view_data" id="<?php echo $row['id']; ?>"/></td>
                            <td><input type="button" name="view" value="edit" class="btn btn-success btn-xs edit_data" id="<?php echo $row['id']; ?>"/></td>
                            <td><input type="button" name="view" value="delete" class="btn btn-danger btn-xs delete_data" id="<?php echo $row['id']; ?>"/></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

        </div>
        <?php require 'viewModal.php'; ?>
        <?php require 'insertModal.php'; ?>

    </body>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#insert-form').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    url: "insert.php",
                    method: "post",
                    data: $('#insert-form').serialize(),
                    beforeSend: function () {
                        $('#insert').val("Insert....");
                    },
                    success: function (data) {
                        $('#insert-form')[0].reset();
                        $('#addModal').modal('hide');
                        location.reload();
                    }
                });
            });
            $('.delete_data').click(function () {
                var uid = $(this).attr("id");
                var status = confirm("Are you delete");
                if (status) {
                    $.ajax({
                        url: "delete.php",
                        method: "post",
                        data: {id: uid},
                        success: function (data) {
                            location.reload();
                        }
                    });
                }


            });
            $('.view_data').click(function () {
                var uid = $(this).attr("id");
                $.ajax({
                    url: "select.php",
                    method: "post",
                    data: {id: uid},
                    success: function (data) {
                        $('#detail').html(data);
                        $('#dataModal').modal('show');
                    }
                });

            });
            $('.edit_data').click(function () {
                var uid = $(this).attr("id");
                $.ajax({
                    url: "fetch.php",
                    method: "post",
                    data: {id: uid},
                    dataType: "json",
                    success: function (data) {
                        $('#id').val(data.id);
                        $('#fname').val(data.fname);
                        $('#lname').val(data.lname);
                        $('#email').val(data.email);
                        $('#web').val(data.web);
                        $('#insert').val("Update");
                        $('#addModal').modal('show');
                    }
                });

            });
        });
    </script>   
</html>