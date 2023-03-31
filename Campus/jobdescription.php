<?php
session_start();
include './admin/data.php';
include './mycon.php';
$jid=$_REQUEST['jid'];
$q="select * from job where jid=$jid";
$re=$con->query($q);
if($r=$re->fetch_assoc())
{
    $cid=$r['cid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Job : <?php echo $r['title'];?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <?php include './header.php'; ?>
    <!-- Header Area End -->

    <!-- Job Single Content Starts -->
    <section class="job-single-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-content">
                        <div class="single-content1">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                                <div class="job-text">
                                    <h4><?php echo $r['title'];?> / <?php echo $r['category'];?></h4>
                                    <ul class="mt-4">
                                        <li class="mb-3"><h5><i class="fa fa-adn"></i><?php echo $r['cname'];?></h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-map-marker"></i><?php echo $r['location'];?></h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-pie-chart"></i><?php echo $r['qualification'];?> with <?php echo $r['percentage'];?>%</h5></li>
                                        <li><h5><i class="fa fa-clock-o"></i> Interview : <?php echo $r['idate'];?></h5></li>
                                    </ul>
                                </div>
                                <div class="job-btn align-self-center">
                                    <img src="pic/<?php echo $r['pic'];?>" class="img-rounded img-fluid" style="width: 150px;height: 150px;"/>
                                </div>
                            </div>
                        </div>
                        <div class="single-content2 py-4">
                            <h4>Job Description</h4>
                            <p><?php echo $r['description'];?></p>
                        </div>
                        <div class="single-content3 py-4">
                            <h4>vacancy</h4>
                            <span class="ml-4"><?php echo $r['vacancy'];?></span>
                        </div>
                        <div class="single-content4 py-4">
                            <h4>Skills</h4>
                            <p><?php echo $r['skills'];?></p>
                            
                        </div>
                        <div class="single-content4 py-4">
                            <h4>Salary</h4>
                            <p><?php echo $r['salary'];?>/- per Month</p>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="single-item mb-4">
                            <h4 class="mb-4">Apply For Job</h4>
                            <form action="applySave.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="jid" value="<?php echo $jid;?>"/>
                                <input type="hidden" name="cid" value="<?php echo $cid;?>"/>
                                <table class="table">
                                    <tr>
                                        <td><input type="text" name="name" class="form-control" placeholder="Candidate Name" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="dob" id="dob" class="form-control" placeholder="Date of Birth" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" name="email" class="form-control" required="required" placeholder="Enter Email"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="mobile" class="form-control" required="required" placeholder="Enter Mobile"/></td>
                                    </tr>
                                    <tr>
                                        <td><select name="qualification" class="form-control">
                                                <?php
                                                foreach ($qualification as $q)
                                                {
                                                    echo "<option>$q</option>";
                                                }
                                                ?>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="percentage" class="form-control" min="50" max="100" required placeholder="Percentage"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="file" name="resume" class="form-control" required="required" title="Upload Your Resume"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" value="Apply for Job" class="btn forth-btn"/></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job Single Content End -->


    <!-- Newsletter Area Starts -->
    
    <!-- Newsletter Area End -->


    <!-- Footer Area Starts -->
   <?php include './footer.php'; ?>
        <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php
}
else
{
    echo "Sorry Job not found.";
}
?>
