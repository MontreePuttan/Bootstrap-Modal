<?php
$id = $_POST['id'];
$con = mysqli_connect("localhost", "root", "mohara","dbstudent");
$query = "select * from tableuser where id ='$id'";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);
echo json_encode($row);


?>