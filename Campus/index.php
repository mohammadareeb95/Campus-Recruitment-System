<?php

include './admin/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>CAMPUS RECRUITMENT SYSTEM</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<?php
        include 'header.php';
        ?>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="banner-bg">
			</div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-text">
                        <h1>Find your dream <span>job</span> with CAMPUS RECRUITMENT SYSTEM</h1>
                        <p class="py-3" style="text-align: justify;">So what exactly is an IT job? An IT job is most commonly some type of computer support job. The job titles for IT jobs could be: Desktop Support Engineer, Computer Consultant, Programmer Analyst, LAN Engineer, WAN Engineer, Network Security Consultant, Database Programmer, CIO (chief information officer), Systems Administrator, Microsoft Administrator, Unix Systems Administrator. The combination of job titles in IT are virtually endless. What I have given you are some of the top categories of IT jobs. Underneath these categories, the list of titles goes on forever.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Search Area Starts -->
    <div class="search-area">
        <div class="search-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="jobs.php" method="get" class="d-md-flex justify-content-between">
                            <select  name="category">
                                <option enabled="">All Category</option>
                                <?php
                                foreach ($category as $c)
                                {
                                    echo "<option>$c</option>";
                                }
                                ?>
                               
                            </select>
                            <select  name="city">
                                <option enabled>Select Location</option>
                                 <?php
                                foreach ($city as $c)
                                {
                                    echo "<option>$c</option>";
                                }
                                ?>
                            </select>
                            <select name="qualification">
                                <option enabled>Highest Qualification</option>
                                <?php
                                foreach ($qualification as $q)
                                {
                                    echo "<option>$q</option>";
                                }
                                ?>
                               
                            </select>
                            <button type="submit" class="template-btn">find job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
        </div>
    </div>
    <!-- Search Area End -->

    <!-- Feature Area Starts -->
   
    <!-- Feature Area End -->

    <!-- Category Area Starts -->
    
    <!-- Jobs Area End -->

    
    <!-- Employee Area End -->

    <!-- News Area Starts -->
  
    <!-- Download Area End -->
    <?php
    include 'footer.php';
    ?>

    <!-- Footer Area Starts -->
    
        <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
