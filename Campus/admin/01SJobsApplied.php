<?php
session_start();
include '../mycon.php';
$sid=$_SESSION['sid'];
$q="select * from student where sid=$sid";
$re=$con->query($q);
if($r=$re->fetch_assoc())
{
    ?>

    <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Jobs Applied</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
    <script type="text/javascript">
    <?php
    if(isset($_SESSION['supdate']))
    {
        ?>
            alert("<?php echo $_SESSION['supdate'];?>");
            <?php
        unset($_SESSION['supdate']);
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
						<h4 class="page-title">About <?php echo $r['name'];?></h4>
			
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>Sr.</th><th>Company</th><th>Title</th><th>Job</th><th>Salary</th><th>Vacancy</th><th>Interview</th><th>Email</th><th>Mobile</th>
                                                                        </tr>
                                                                        <?php
                                                                        $i=1;
                                                                        $q1="select * from jobinfo where sid=$sid";
                                                                        $re1=$con->query($q1);
                                                                        while($r1=$re1->fetch_assoc())
                                                                        {
                                                                            ?>
                                                                        <tr>
                                                                            <td><?php echo $i;?></td>
                                                                            <td><a href="01SJobsView.php?jid=<?php echo $r1['jid'];?>"><?php echo $r1['cname'];?></a></td>
                                                                            <td><a href="01SJobsView.php?jid=<?php echo $r1['jid'];?>"><?php echo $r1['title'];?></a></td>
                                                                            
                                                                            <td><?php echo $r1['title'];?></td>
                                                                            <td><?php echo $r1['salary'];?></td>
                                                                            <td><?php echo $r1['vacancy'];?></td>
                                                                            <td><?php echo $r1['idate'];?></td>
                                                                            <td><?php echo $r1['jemail'];?></td>
                                                                            <td><?php echo $r1['mobile'];?></td>
                                                                            
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