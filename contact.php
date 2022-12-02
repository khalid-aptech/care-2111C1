<?php include "nav.php" ;?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- address start -->
                <div class="address-block">
                    <!-- Location -->
                    <div class="media">
                        <i class="fa fa-map-o"></i>
                        <div class="media-body">
                            <h3>Location</h3>
                            <p>PO Box 16122 Collins Street West
                                <br>Victoria 8007 Canada</p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h3>Phone</h3>
                            <p>
                                (+48) 564-334-21-22-34
                                <br>(+48) 564-334-21-22-38
                            </p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="media">
                        <i class="fa fa-envelope-o"></i>
                        <div class="media-body">
                            <h3>Email</h3>
                            <p>
                                info@templatepath.com
                                <br>info@cleanxer.com
                            </p>
                        </div>
                    </div>
                </div>
                <!-- address end -->
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="#" class="row" method="POST">
                        <!-- name -->
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control main" placeholder="Name" required>
                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                            <input type="email" class="form-control main" name="email" placeholder="Email" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-12">
                            <input type="text" class="form-control main" name="phone" placeholder="Phone" required>
                        </div>
                        <!-- message -->
                        <div class="col-md-12">
                            <textarea name="message" rows="15" class="form-control main" placeholder="Your message"></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" name="submit" type="submit">Send Message</button>
                        </div>
                    </form>
                            
<?php
if(isset($_POST["submit"])){
    
        include "config.php";

  
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $phone = $_POST["phone"];

        
        $query = "INSERT INTO `contact`( `NAME`, `EMAIL`, `PHONE`, `MESSAGE`) VALUES
        ('{$name}','{$email}','{$phone}','{$message}')";
          mysqli_query($conn, $query);

          echo "Thankyou for your feedback!";

      //     header("location:index.php");
    
            
        }



    ?>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<!--================================
=            Google Map            =
=================================-->
<section class="map">
    <!-- Google Map -->
    <div id="map"></div>
</section>
<!--====  End of Google Map  ====-->

<?php include "footer.php"; 
 ?>
</body>

</html>