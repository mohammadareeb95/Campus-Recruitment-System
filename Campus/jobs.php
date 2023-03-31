<?php
session_start();
include './mycon.php';
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
    <title>Job Search</title>

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
    <script type="text/javascript">
    <?php
    if(isset($_SESSION['ac']))
    {
        ?>
            alert("<?php echo $_SESSION['ac'];?>");
            <?php
        unset($_SESSION['ac']);
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

<br/><Br/><br/>
    <!-- Search Area Starts -->
    <div class="search-area">
        <div class="search-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="jobs.php" method="get" class="d-md-flex justify-content-between">
                            <select  name="category">
                                <option disabled="">All Category</option>
                                <?php
                                foreach ($category as $c)
                                {
                                    echo "<option>$c</option>";
                                }
                                ?>
                               
                            </select>
                            <select  name="city">
                                <option disabled>Select Location</option>
                                 <?php
                                foreach ($city as $c)
                                {
                                    echo "<option>$c</option>";
                                }
                                ?>
                            </select>
                            <select name="qualification">
                                <option disabled>All Qualification</option>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-5 text-uppercase">
                    <span><?php
                    if(isset($_REQUEST['category']))
                    {
                        echo "Results found for ".$_REQUEST['category'];
                    }
                    else
                    {
                        echo "All Jobs";
                    }
                    ?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Area End -->


    <!-- Jobs Area Starts -->
    <section class="jobs-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    $q="select * from job";
                    if(isset($_REQUEST['category']) && isset($_REQUEST['city']) && isset($_REQUEST['qualification']))
                    {
                        $category=$_REQUEST['category'];
                        $city=$_REQUEST['city'];
                        $qualification=$_REQUEST['qualification'];
                        $q="select * from job where  qualification='$qualification' or category='$category'";
                    }
                  else  if(isset($_REQUEST['category']))
                    {
                       
                        $category=$_REQUEST['category'];
                        $q="select * from job where category='$category'";
                    }
                    else
                    {
                        $q="select * from job";
                    }
                    $re=$con->query($q);
                    while($r=$re->fetch_assoc())
                    {
                        ?>
                    <div class="single-job mb-4 d-lg-flex justify-content-between">
                        <div class="job-text">
                            <h4><?php echo $r['title'];?> / <?php echo $r['category'];?></h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> <?php echo $r['location'];?></h5></li>
                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> <?php echo $r['qualification'];?> with <?php echo $r['percentage'];?>%</h5></li>
                                <li><h5><i class="fa fa-clock-o"></i> Interview: <?php echo $r['idate'];?></h5></li>
                            </ul>
                        </div>
                        <div class="job-img align-self-center">
                            <img src="pic/<?php echo $r['pic'];?>"  style="width: 100px; height: 100px;"  class="img-circle img-fluid" alt="job">
                        </div>
                        <div class="job-btn align-self-center">
                           
                            <a href="jobdescription.php?jid=<?php echo $r['jid'];?>" class="third-btn">apply</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    
                </div>
            </div>
            
        </div>
    </section>
    <!-- Jobs Area End -->


    <!-- Footer Area Starts -->
    <?php include './footer.php'; ?>
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
