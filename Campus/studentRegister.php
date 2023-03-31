<?php
session_start();
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
    <title>Students Registration</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
     <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
      <!-- Javascript -->  
      <script>  
         $(function() {  
            $( "#dob" ).datepicker({    
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
    <script type="text/javascript">
    <?php
    if(isset($_SESSION['fail']))
    {
        ?>
            alert("<?php echo $_SESSION['fail'];?>");
            <?php
        unset($_SESSION['fail']);
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
                <!--<div class="col-md-6">
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
                  <a href="companyRegister.php">Click here for Company Registration</a></br>
                  </div>
                
               
               <div class="col-md-6">
                    <h2>Student Registration Form</h2>
                    <?php
                if(isset($_SESSION['studentsave']))
                {
                    echo $_SESSION['studentsave'];
                    unset($_SESSION['studentsave']);
                }
                ?>
                    <form action="studentsave.php" method="post" enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <td>Enter Student Name<br/>
                                    <input type="text" name="name" class="form-control" required="required"  onkeydown="Check(this)" onkeyup="Check(this)"/></td>
                            </tr>
                            <tr>
                                <td>Enter D.O.B.<br/><input type="date" id="dob" name="dob" max="2004-01-01" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td>Select Gender<br/>
                                    <input type="radio" name="gender" required="required" checked/>Male
                                    <input type="radio" name="gender" required="required" />Female
                                
                                </td>
                            </tr>
                            <tr>
                                <td>Enter Email<br/><input type="email" name="email" required="required"  class="form-control"/></td>
                            </tr>
                            <tr>
                                <td>Enter Password<br/><input type="password" name="password" required="required" class="form-control"/></td>
                            </tr>
                           <tr>
                                <td><select name="qualification" class="form-control">
                                        <option disabled>Select Qualification</option>
                                       <?php
                                       foreach($qualification as $q)
                                       {
                                           echo "<option>".$q."</option>";
                                       }
                                       ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Select your profile picture<br/><input type="file" name="pic" required="required" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td>Enter Address<br/><textarea name="address" required="required" class="form-control"></textarea></td>
                            </tr>
                            
                            <tr>
                                <td><input type="submit" value="Register" class="form-control btn btn-success"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </section>
    <!-- Contact Form End -->


    <!-- Footer Area Starts -->
    
          <?php include './footer.php'; ?>
        
        <!-- Footer Area End -->


    <!-- Javascript -->
   
</body>
</html>
