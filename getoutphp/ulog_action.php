<?php
    include('connection.php');
    if(isset($_POST['login']))
{
	$flag=0;
	$email=$_POST['your-email'];
	$pass=$_POST['password'];
	$res=mysqli_query($con,"select * from registration where email='$email' and password='$pass'");
	while($row=mysqli_fetch_array($res))
	{
		$flag=1;
	}
	if($flag==1)
	{
		header('location:../home.php');
	}
	else
	{
		?>
		<script>alert('invalid user!!!  username and password doesnt match!!');window.location='loginindex1.php';</script>
		<?php
	}
}

?>