<?php
session_start();
include '../mycon.php';
$cid=$_SESSION['cid'];
$q="select * from company where cid=$cid";
$re=$con->query($q);
if($r=$re->fetch_assoc())
{
    $_SESSION['cname']=$r['name'];
    $_SESSION['cpic']=$r['pic'];
    ?>

    <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Hi <?php echo $r['name'];?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
        <script type="text/javascript">
            function Check(me)
            {
                me.value = me.value.replace(/[&\/\\#,+()$~%.'":*?<>{}_0-9]/g, "");
            }
            function CheckNum(me)
            {
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
    if(isset($_SESSION['cupdate']))
    {
        ?>
            alert("<?php echo $_SESSION['cupdate'];?>");
            <?php
        unset($_SESSION['cupdate']);
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
						<h4 class="page-title">About <?php echo $r['name'];?></h4>
			
						<div class="row">
							<div class="col-md-4">
								<div class="card">
                                                                    <img src="../pic/<?php echo $r['pic'];?>" style="width: 330px; height: 300px;" class="img-rounded img-rounded"/>
								<form action="01CUpdatePic.php" method="post"  enctype="multipart/form-data">
                                                                        <input type="hidden" name="cid" value="<?php echo $cid;?>"/>
                                                                        <table class="table">
                                                                            <tr>
                                                                                <td><input type="file" name="pic" class="form-control" required="required"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="submit" value="Update Image" class="btn btn-success"/></td>
                                                                            </tr>
                                                                        </table>
                                                                      </form>
                                                                </div>
							</div>
							<div class="col-md-8">
								<div class="card">
                                                                    <form action="01CUpdateData.php" method="post">
                                                                        <input type="hidden" name="cid" value="<?php echo $cid;?>"/>
                                                                        <table class="table">
                                                                            <tr>
                                                                                <td>Current Status</td>
                                                                                <td><select name="status"  disabled class="form-control">
                                                                                        <option><?php echo $r['status']; ?></option>
                                                                                       
                                                                                    </select></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Company</td>
                                                                                <td><input type="text" name="name" value="<?php echo $r['name'];?>" class="form-control"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Founded</td>
                                                                                <td><input type="date" name="founded" class="form-control" value="<?php echo $r['founded'];?>" required="required"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Founder</td>
                                                                                <td><input type="text" name="founder" class="form-control" value="<?php echo $r['founder'];?>" onkeydown="Check(this)"  onkeyup="Check(this)"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Email</td>
                                                                                <td><input type="email" name="email" class="form-control" value="<?php echo $r['email'];?>"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Password</td>
                                                                                <td><input type="text" name="password" class="form-control" value="<?php echo $r['password'];?>"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Services</td>
                                                                                <td><input type="text" name="services" value="<?php echo $r['services'];?>" class="form-control" onkeydown="Check(this)"  onkeyup="Check(this)" required="required"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Address</td>
                                                                                <td><textarea name="address" class="form-control" required="required"><?php echo $r['address'];?></textarea></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <input type="submit" value="Update Information" class="btn btn-success" />
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