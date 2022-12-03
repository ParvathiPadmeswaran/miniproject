<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>signlanguage</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title> SIGN LANGUAGE RECOGONITION SYSTEM</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<body class="form-v9">
	 <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>sign</em>Language</a>
    </div>
    
  </header>
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('images/form-v10.jpg')">
			<form class="form-detail" action="ureg_action.php" method="post">
				<h2 style="color: black;">Registration Form</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" pattern="[a-zA-Z]+[ ][a-zA-Z]+" title="Enter valid Name"  autocomplete="off"  required >
					</div>
					<div class="form-row">
						<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Your Email"  autocomplete="off" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>

				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*-]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter and special character, and at least 8 or more characters" required>
					</div>
					<div class="form-row">
						<input type="password" name="comfirm-password" id="confirm_password" class="input-text" placeholder="Comfirm Password" required>
					</div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
					<p style="color: black;">Already have an account ? <a href="loginindex1.php">Sign in</a></p>
				</div>
			</form>
		</div>
	</div>
</body></html>


<script>
		var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>