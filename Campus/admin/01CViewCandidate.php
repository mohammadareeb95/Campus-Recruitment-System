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
	<title>All Candidates</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
    <script type="text/javascript">
    <?php
    if(isset($_SESSION['jd']))
    {
        ?>
            alert("<?php echo $_SESSION['jd'];?>");
            <?php
        unset($_SESSION['jd']);
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
						<h4 class="page-title">All Available Candidates</h4>
			
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>Sr.</th>
                                                                            <th>JID</th>
                                                                            <th>Candidate</th>
                                                                            <th>Email</th>
                                                                            <th>Mobile</th>
                                                                            <th>Qualification</th>
                                                                            <th>DOB</th>
                                                                            <th>Resume</th>
                                                                        </tr>
                                                                        <?php
                                                                        $i=1;
                                                                        $q1="select * from jobinfo";
                                                                        $re1=$con->query($q1);
                                                                        while($r1=$re1->fetch_assoc())
                                                                        {
                                                                            ?>
                                                                        <tr>
                                                                            <td><?php echo $i;?></td>
                                                                            <td><a href="01CJobView.php?jid=<?php echo $r1['jid'];?>"  class="btn btn-warning"><?php echo $r1['jid'];?></a></td>
                                                                            <td><?php echo $r1['sname'];?></td>
                                                                            <td><?php echo $r1['semail'];?></td>
                                                                            <td><?php echo $r1['smobile'];?></td>
                                                                            <td><?php echo $r1['squalification'];?></td>
                                                                            <td><?php echo $r1['dob'];?></td>
                                                                            <td><a href="../pic/<?php echo $r1['resume'];?>" target="blank" class="btn btn-default">Resume</a></td>
                                                                            
                                                                        </tr>
                                                                        <?php
                                                                            $i++;
                                                                        }
                                                                        ?>
                                                                    </table>
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