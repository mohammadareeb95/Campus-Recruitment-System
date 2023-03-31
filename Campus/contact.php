<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Contact Us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript">
    function Check(me) {
    me.value = me.value.replace(/[&\/\\#,+()$~%.'":*?<>{}_0-9]/g, "");
}
    </script>
</head>
<body>
    <script type="text/javascript">
     <?php
                if(isset($_SESSION['contactsave']))
                {
                    ?>
                        alert("<?php echo $_SESSION['contactsave']; ?>");
                        <?php
                    unset($_SESSION['contactsave']);
                }
                ?>
    </script>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    
        <?php include './header.php'; ?>
    
    <!-- Header Area End -->

    <!-- Map Area Starts -->
    <br/><br/>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h4>Aligarh, INDIA</h4>
                            <p>Medical Road, Aligarh</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h4>+91 9520500461</h4>
                            <p>Mon to Fri 9 am to 5 pm</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-text">
                            <p>mohammadareeb95@gmail.com</p>
                            <p>available 24 x 7</p>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-9">
                    <form action="contactsave.php" method="post">
                        <div class="left">
                            <input type="text"  name="name" placeholder="Enter your name" required  onkeydown="Check(this)" onkeyup="Check(this)"/>
                            <input type="email" placeholder="Enter email address" name="email" required/>
                            <input type="text" placeholder="Enter subject" name="subject" required onkeydown="Check(this)" onkeyup="Check(this)"/>
                        </div>
                        <div class="right">
                            <textarea name="message" cols="20" rows="7"  placeholder="Enter Message"  required></textarea>
                        </div>
                        <input style="width: 50%;" type="submit" class="btn btn-success form-control"   value="Send Message"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->


    <!-- Footer Area Starts -->
    
          <?php include './footer.php'; ?>
        
        <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/gmaps.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
