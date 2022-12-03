<?php
include('connection.php');
if(isset($_POST['feedback']))
{
	$feedback=$_POST['message'];
	$email=$_POST['your-email'];

	$res=mysqli_query($con,"insert into feedback(feedback,email) values('$feedback,$email')");
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