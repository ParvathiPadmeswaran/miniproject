<!DOCTYPE html>
<html >

<head>

    <style type="text/css">
        .ab{
                padding: 30px;
    color: azure;
    background-color: #c4c3c1;
    border: 1px solid;
    width: 600px;
        }
    </style>
    <meta charset="utf-8">
    <title>SLRS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">




    
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">  
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
             
                    <h1 class="text-uppercase text-primary mb-1">sign language</h1>
               
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                       <!--  <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">About</a> -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">user</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <!-- <a href="pro/fdb.php" class="dropdown-item">feedback</a> -->
                                <a href="pro/index.php" class="dropdown-item">Logout</a>
                                <a href="home.php" class="dropdown-item">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
   

    <div class="container-fluid p-0" style="margin-bottom: 30px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Sign Language Recognition System</h4>
                            <h3 class="display-1 text-white mb-md-4">Sign Language To Text </h3>
                            <br>
                           <center> <form action="" style="width: 30%; padding: 10px;" method="POST" enctype="multipart/form-data">
    
Upload image here
 <br>
<input type="file" style="text-align: center;" name="uploadedfile"  required id="ip1" accept="image/*" class='form-control'><br>
 
 
     <div class="text-center"><input type="Submit" name="Submit" value="Submit" class='btn btn-primary' id="p1"></div><br>
     </form>
</center>




<?php
         if(isset($_POST['Submit']))
         {  
            echo"<h2 style='color:white'>OUTPUT</h2>";
            $target_path = "input/input.jpg";
            if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
            $python=`python classify.py`;
            //$myfile = fopen("out.txt", "r") or die("Unable to open file!");
            //echo fgets($myfile);
            //fclose($myfile);
            //echo "<audio controls><source src="test.mp3" type="audio/mpeg"></audio>";
            //header('location:output.php');
            echo "<script type='text/javascript'>location.href = 'output.php';</script>";
         }
        elseif (isset($_POST['startcam'])) {
                # code...
                $python=`python classify_webcam.py`;

            }

             else{
                echo "There was an error uploading the file, please try again!";
            }

         }
?>


<br>
<br>
<!--<audio controls><source src="test.mp3" type="audio/mpeg"></audio>-->
<br>
<br>
<br>

<div class="text-center"><a class='btn btn-primary' href="sign_to_text_webcam.php">Click here to start webcam</a></div>

                        </div>
                    </div>
                </div>
              
            </div>
            
        </div>
    </div>


    
    <!-- Carousel End -->


    <!-- About Start -->
    
    <!-- About End -->
    

  






    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>