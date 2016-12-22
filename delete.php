<?php
$id = $_POST['id'];
$con = mysqli_connect("localhost", "root", "mohara","dbstudent");
$query = "delete from tableuser where id ='$id'";
$result = mysqli_query($con, $query);


?>