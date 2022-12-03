<?php
include('connection.php');
if(isset($_POST['register']))
{

$name=$_POST['full-name'];
$email=$_POST['your-email'];
$pass=$_POST['password'];
$res=mysqli_query($con,"insert into registration(name,email,password) values('$name','$email','$pass')");
//header('location:loginindex1.php');
if(res)
{
	?>
	<script>alert('thank u');window.location='loginindex1.php';
</script>
		<?php
}
else
{
	?>
	<script>alert('user has already registered!!!');window.location='reg.php';
</script>
		<?php
}
}
?>