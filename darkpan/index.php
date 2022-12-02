<?php 
ob_start();

// session_start();


// if(isset($_SESSION["email"] ))
// {
//     header("location:http://localhost:82/darkpan3/doctor.php");

// }


?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Care</h3>
                            </a>
                            <h3>Log In</h3>
                        </div>
                        <form  action="" method ="POST">
                        <div class="form-floating mb-3" method="">
                            <input type="email" class="form-control"  name="email" id="floatingText" placeholder="">
                            <label for="floatingText">Email</label>
                        </div>
                    
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                     
                        <button type="submit" name="login" class="btn btn-primary py-3 w-100 mb-4" value ="login">login</button>
                        <!-- <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>


                        
            <?php

                    if(isset($_POST["login"]))

                    {

                    include "config.php";

                    $email = $_POST["email"];
                    $password = $_POST["password"];

                
                  $query = "SELECT `ID`, `NAME`, `EMAIL`, `PASSWORD`, `IMAGE`, `ROLE` FROM `user`  WHERE 
                     `Email`= '{$email}' AND `PASSWORD` = '{$password}'";
                    

                    $result =  mysqli_query($conn, $query);
                    // print_r($result);
                  

                    if(mysqli_num_rows($result)>0)
                    {

                        while($row = mysqli_fetch_assoc($result))
                        {
                      


                            $id= $row["ID"];
                            $email = $row["EMAIL"];
                            $role = $row["ROLE"];
                            $image = $row["IMAGE"];

                            session_start();

                            $_SESSION["email"] = $email;
                            $_SESSION["id"] = $id;
                            $_SESSION["role"] = $role;
                            $_SESSION["name"] = $row["NAME"];
                            $_SESSION["image"] = $role["IMAGE"];
                       

                            header("location:doctor.php");


                        }
                    }
                    else
                    {


                        echo "<script>
                        
                        
                        alert('username password did not match')
                        
                        </script>";
                        
                    }
                }


                    ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
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