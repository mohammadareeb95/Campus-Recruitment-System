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
	<title>All Requests</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
    <script type="text/javascript">
    <?php
    if(isset($_SESSION['jrd']))
    {
        ?>
            alert("<?php echo $_SESSION['jrd'];?>");
            <?php
        unset($_SESSION['jrd']);
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
						<h4 class="page-title">All Available Requests</h4>
			
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
                                                                            <th>Percentage</th>
                                                                            <th>Resume</th>
                                                                            <th>Option</th>
                                                                        </tr>
                                                                        <?php
                                                                        $i=1;
                                                                        $q="select * from apply where cid=$cid order by duration desc";
                                                                        $re=$con->query($q);
                                                                        while($r=$re->fetch_assoc())
                                                                        {
                                                                            ?>
                                                                        <tr>
                                                                            <td><?php echo $i;?></td>
                                                                            <td><a href="01CJobView.php?jid=<?php echo $r['jid'];?>"  class="btn btn-warning"><?php echo $r['jid'];?></a></td>
                                                                            <td><?php echo $r['name'];?></td>
                                                                            <td><?php echo $r['email'];?></td>
                                                                            <td><?php echo $r['mobile'];?></td>
                                                                            <td><?php echo $r['qualification'];?></td>
                                                                            <td><?php echo $r['percentage'];?>%</td>
                                                                            <td><a href="../pic/<?php echo $r['resume'];?>" target="blank" class="btn btn-default">Resume</a></td>
                                                                            <td><a href="01CJobRequestsRemove.php?aid=<?php echo $r['aid'];?>" class="btn btn-danger">Remove</a></td>
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