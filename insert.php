<?php
error_reporting (E_ALL ^ E_NOTICE);

$id = $_POST['id'];
$con = mysqli_connect("localhost", "root", "mohara","dbstudent");
$fname = mysqli_real_escape_string($con,$_POST['fname']);
$lname = mysqli_real_escape_string($con,$_POST['lname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$web = mysqli_real_escape_string($con,$_POST['web']);

//$query = "insert into tableuser(fname,lname,email,web) values('$fname','$lname','$email','$web')";

if($id!=""){
    $query = "update tableuser set fname='$fname',lname='$lname',email='$email',web='$web' where id ='$id'";
}else{
    $query = "insert into tableuser(fname,lname,email,web) values('$fname','$lname','$email','$web')";
}

if(mysqli_query($con, $query)){
    
    echo "Complete";
} else {
    echo "error";
}
?>