<?php
include('connection.php');
if(isset($_POST['register']))
{

$name=$_POST['full-name'];
$email=$_POST['your-email'];
$pass=$_POST['password'];
$res=mysqli_query($con,"insert into registration(name,email,password) values('$name','$email','$pass')");
header('location:login/index.php');
}
?>