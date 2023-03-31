<?php
session_start();
include '../mycon.php';
include './data.php';
$sid=$_SESSION['sid'];
$q="select * from student where sid=$sid";
$re=$con->query($q);
if($r=$re->fetch_assoc())
{
    $jid=$_REQUEST['jid'];
    $q1="select * from job where jid=$jid";
    $re1=$con->query($q1);
    if($r1=$re1->fetch_assoc())
    {
    ?>

    <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $r1['title'];?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
    <script type="text/javascript">
    <?php
    if(isset($_SESSION['ac1']))
    {
        ?>
            alert("<?php echo $_SESSION['ac1'];?>");
            <?php
        unset($_SESSION['ac1']);
    }
    ?>
    </script>
	<div class="wrapper">
		<div class="main-header">
			<?php include './01ATitle.php'; ?>
			</div>
			<div class="sidebar">
			<?php include './01SHeader.php'; ?>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title"><?php echo $r1['title'];?> @ <?php echo $r1['cname'];?></h4>
			
						<div class="row">
							
							<div class="col-md-8">
								<div class="card">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <td>Company Name</td>
                                                                            <td><?php echo $r1['cname'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Job Title</td>
                                                                            <td><?php echo $r1['title'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Salary</td>
                                                                            <td><?php echo $r1['salary'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Job Category</td>
                                                                            <td><?php echo $r1['category'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Vacancies</td>
                                                                            <td><?php echo $r1['vacancy'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Interview</td>
                                                                            <td><?php echo $r1['idate'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Qualification</td>
                                                                            <td><?php echo $r1['qualification'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Percentage</td>
                                                                            <td><?php echo $r1['percentage'];?>%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Skills</td>
                                                                            <td><?php echo $r1['skills'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Job Description</td>
                                                                            <td><?php echo $r1['description'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Contact Person</td>
                                                                            <td><?php echo $r1['cperson'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mobile</td>
                                                                            <td><?php echo $r1['mobile'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Email</td>
                                                                            <td><?php echo $r1['email'];?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Job Location</td>
                                                                            <td><?php echo $r1['location'];?></td>
                                                                        </tr>
                                                                    </table>     
								</div>
							</div>
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <h4 class="mb-4">Apply For Job</h4>
                                                            <form action="01SApplySave.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="jid" value="<?php echo $jid;?>"/>
                                <input type="hidden" name="cid" value="<?php echo $r1['cid'];?>"/>
                                <table class="table">
                                    <tr>
                                        <td><input type="text" name="name" class="form-control"  value="<?php echo $r['name'];?>" placeholder="Candidate Name" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="dob" id="dob" class="form-control" value="<?php echo $r['dob'];?>" placeholder="Date of Birth" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" name="email" class="form-control" required="required" value="<?php echo $r['email'];?>" placeholder="Enter Email"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="mobile" class="form-control" required="required" placeholder="Enter Mobile" value="<?php echo $r['mobile'];?>"/></td>
                                    </tr>
                                    <tr>
                                        <td><select name="qualification" class="form-control">
                                                <option><?php echo $r['qualification'];?></option>
                                                
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="percentage" class="form-control" min="50" max="100" required placeholder="Percentage"/></td>
                                    </tr>
                                    <tr>
                                        <td>Upload Resume<br/><input type="file" name="resume" class="form-control" required="required" title="Upload Your Resume"/></td>
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
				<footer class="footer">
					<?php include './footer.php'; ?>
				</footer>
			</div>
		</div>
	</div>
	<!-- Modal -->
	
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>

<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>
<?php
    }
    else
    {
        echo "Sorry job not found.";
    }
}
 else {
         echo "Sorry data not found.";   
 }
?>