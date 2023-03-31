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
    <title>Company's Registration</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script   type="text/javascript">
         $(function() {  
            $( "#founded" ).datepicker({    
               dateFormat:"DD, d MM, yy",  
               showAnim: "explode",
                minDate: 0
            });  
         }); 
         function Check(me) {
    me.value = me.value.replace(/[&\/\\#,+()$~%.'":*?<>{}_0-9]/g, "");
}
function CheckNum(me) {
    me.value = me.value.replace(/[a-z]/g, "");
}
function setLimit()
{
    var x = document.getElementById("mobile").value;
    if(x.length!=10)
        {
            alert("Please Enter 10 Digits Mobile Number.");
            document.getElementById("mobile").value="";
        }
}
    </script>
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

    <!-- Map Area Starts -->
    <br/><br/>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
            <div class="row">
               <!-- <div class="col-md-6">
                    <h2>Login Here</h2>
                    <form action="loginData.php" method="post">
                        <table class="table" >
                            <tr>
                                <td>Enter Email<br/>
                                <input type="email" name="email" class="form-control" required="required" /></td>
                            </tr>
                            <tr>
                                <td>Enter Password</br>
                                    <input type="password" name="password" class="form-control" required="required"/>
                                </td>
                            </tr>
                             <tr>
                                <td><select name="role" class="form-control">
                                        <option disabled>Select Role</option>
                                        <option>Admin</option>
                                        <option>Company</option>
                                        <option>Student</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Login" class="form-control btn btn-success"/></td>
                            </tr>
                        </table>
                    </form>-->
                    <hr/>
                    <a href='studentRegister.php'>Student Register Here</a>
                </div>
                
               
                <div class="col-md-6">
                    <h2>Company Registration Form</h2>
                    <?php
                if(isset($_SESSION['companysave']))
                {
                    echo $_SESSION['companysave'];
                    unset($_SESSION['companysave']);
                }
                ?>
                    
                    <form action="companysave.php" method="post" enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <td>Enter Company Name<br/>
                                    <input type="text" name="name" maxlength="15" class="form-control" required="required"/></td>
                            </tr>
                            <tr>
                                <td>Enter Company Founder<br/><input type="text" name="founder" class="form-control"  onkeydown="Check(this)" onkeyup="Check(this)" /></td>
                            </tr>
                            
                            <tr>
                                <td>Company Founded<br/><input type="date" name="founded" max="2020-01-01" id="founded" required="required" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td>Enter Email<br/><input type="email" name="email" required="required" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td>Enter Password<br/><input type="password" name="password" required="required" class="form-control"/></td>
                            </tr>
                            
                            <tr>
                                <td>Enter pic<br/><input type="file" name="pic" required="required" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td>Enter Address<br/><textarea name="address" required="required" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <td>Enter Company's Services<br/><input type="text" name="services" maxlength="20" onkeydown="Check(this)" onkeyup="Check(this)" required="required" class="form-control  text-uppercase"/></td>
                             
                            </tr>
                            
                            
                            <tr>
                                <td colspan="2"><input type="submit" value="Register" class="form-control btn btn-success"/></td>
                            </tr>
                        </table>
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
    <script src="assets/js/vendor/gmaps.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
