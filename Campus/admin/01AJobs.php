<?php
session_start();
include '../mycon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>All Jobs</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
    <script type="text/javascript">
    <?php
    if(isset($_SESSION['cd']))
    {
        ?>
            alert("<?php echo $_SESSION['cd'];?>");
            <?php
        unset($_SESSION['cd']);
    }
    ?>
    </script>
	<div class="wrapper">
		<div class="main-header">
			<?php include './01ATitle.php'; ?>
			
			</div>
			<div class="sidebar">
			<?php include './01AHeader.php'; ?>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-12">
												
								<div class="card">
									<div class="card-header">
										<div class="card-title">All Jobs</div>
									</div>
									<div class="card-body">
										
										<table class="table table-head-bg-primary mt-4">
											<thead>
												<tr>
													<th scope="col">Sr.</th>
													<th scope="col">Company</th>
													<th scope="col">Title</th>
													<th scope="col">Salary</th>
                                                                                                        <th scope="col">Interview</th>
                                                                                                        <th scope="col">Status</th>
                                                                                                        <th scope="col">Option</th>
												</tr>
											</thead>
											<tbody>
												<?php
                                                                                                $q="select * from job";
                                                                                                $re=$con->query($q);
                                                                                                $i=1;
                                                                                                while($r=$re->fetch_assoc())
                                                                                                {
                                                                                                    ?>
                                                                                            <tr>
													<td><?php echo $i;?></td>
													<td><?php echo $r['cname'];?></td>
													<td><?php echo $r['title'];?></td>
													<td><?php echo $r['salary'];?></td>
                                                                                                        <td><?php echo $r['idate'];?></td>
                                                                                                        <td><?php echo $r['status'];?></td>
                                                                                                        <td><a href="01AJobsRemove.php?id=<?php echo $r['id'];?>" class="btn btn-danger">Delete</a></td>
												</tr>
                                                                                            <?php
                                                                                            $i++;
                                                                                                }
                                                                                                ?>
												
											</tbody>
										</table>
									</div>
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
</div>
<!-- Modal -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">									
				<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
				<p>
				<b>We'll let you know when it's done</b></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script>
	$('#displayNotif').on('click', function(){
		var placementFrom = $('#notify_placement_from option:selected').val();
		var placementAlign = $('#notify_placement_align option:selected').val();
		var state = $('#notify_state option:selected').val();
		var style = $('#notify_style option:selected').val();
		var content = {};

		content.message = 'Turning standard Bootstrap alerts into "notify" like notifications';
		content.title = 'Bootstrap notify';
		if (style == "withicon") {
			content.icon = 'la la-bell';
		} else {
			content.icon = 'none';
		}
		content.url = 'index.html';
		content.target = '_blank';

		$.notify(content,{
			type: state,
			placement: {
				from: placementFrom,
				align: placementAlign
			},
			time: 1000,
		});
	});
</script>
</html>