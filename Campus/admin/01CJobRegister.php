<?php
session_start();
include '../mycon.php';
$cid=$_SESSION['cid'];
$q="select * from company where cid=$cid";
$re=$con->query($q);
if($r=$re->fetch_assoc())
{
    ?>

    <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Add New Job</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
        <script type="text/javascript">
        function Check(me) {
    me.value = me.value.replace(/[&\/\\#,+()$~%.'":*?<>{}_0-9]/g, "");
}
function CheckNum(me) {
    me.value = me.value.replace(/[&\/\\#,+()$~%.'":*?<>{}_/[a-z]/g, "");
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
    if(isset($_SESSION['job_save']))
    {
        ?>
            alert("<?php echo $_SESSION['job_save'];?>");
            <?php
        unset($_SESSION['job_save']);
    }
    ?>
    </script>
	<div class="wrapper">
		<div class="main-header">
			<?php include './01ATitle.php'; ?>
			</div>
			<div class="sidebar">
			<?php include './01CHeader.php'; ?>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Insert New Job</h4>
			
						<div class="row">
							
							<div class="col-md-8">
								<div class="card">
                                                                    <form action="01CJobSave.php" method="post">
                                                                        <input type="hidden" name="cid" value="<?php echo $cid;?>"/>
                                                                        <input type="hidden" name="pic" value="<?php echo $r['pic'];?>"/>
                                                                        <table class="table">
                                                                            
                                                                            <tr>
                                                                                <td>Company</td>
                                                                                <td><input type="text" name="cname" readonly value="<?php echo $r['name'];?>" class="form-control"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Job Title</td>
                                                                                <td><input type="text" name="title" class="form-control" onkeydown="Check(this)" onkeyup="Check(this)" required="required"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Salary</td>
                                                                                <td><input type="number" name="salary" class="form-control" min="2000" max="200000" onkeydown="CheckNum(this)" onkeyup="CheckNum(this)" required="required"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Email</td>
                                                                                <td><input type="email" name="email" class="form-control" value="<?php echo $r['email'];?>"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Mobile</td>
                                                                                <td><input type="text" name="mobile" class="form-control" id="mobile" onblur="setLimit()" maxlength="10"  onkeydown="CheckNum(this)"  onkeyup="CheckNum(this)" required="required"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contact's Person</td>
                                                                                <td><input type="text" name="cperson"  class="form-control" onkeydown="Check(this)" onkeyup="Check(this)" required="required"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Job Location</td>
                                                                                <td><textarea name="location" class="form-control" onkeydown="Check(this)" onkeyup="Check(this)" required="required"></textarea></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <input type="submit" value="Register Job" class="btn btn-success" />
                                                                                </td>
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
 else {
         echo "Sorry data not found.";   
 }
?>