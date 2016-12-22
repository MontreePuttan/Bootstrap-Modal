<?php
$id = $_POST['id'];
$outp = "";
$con = mysqli_connect("localhost", "root", "mohara","dbstudent");
$query = "select * from tableuser where id ='$id'";
$result = mysqli_query($con, $query);

$outp.="<div class='table table-responsive'> <table class='table table-bordered'>";

while($row = mysqli_fetch_array($result)){
    $outp.="<tr><td width='30%'><label>Name</label></td><td width='70%'>".$row['fname']."</td></tr>";
    $outp.="<tr><td width='30%'><label>Lastname</label></td><td width='70%'>".$row['lname']."</td></tr>";
    $outp.="<tr><td width='30%'><label>Email</label></td><td width='70%'>".$row['email']."</td></tr>";
    $outp.="<tr><td width='30%'><label>Website</label></td><td width='70%'>".$row['web']."</td></tr>";
}
$outp.="</table></div>";
echo $outp;
?>