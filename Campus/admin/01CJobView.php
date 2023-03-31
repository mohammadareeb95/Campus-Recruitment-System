<?php
session_start();
include '../mycon.php';
include './data.php';
$jid=$_REQUEST['jid'];
$q="select * from job where jid=$jid";
$re=$con->query($q);
if($r=$re->fetch_assoc())
{
    ?>
    <!DOCTYPE html>
<html>
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>About <?php echo $r['title'];?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
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
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
      <!-- Javascript -->  
      <script>  
         $(function() {  
            $( "#idate" ).datepicker({  
               dateFormat:"DD, d MM, yy", 
                showAnim: "explode",
                minDate: 0,
                maxDate:10
            });  
         }); 
         
        function pdate()
        {
           var today = new Date();
  var day = today.getDay();
  var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
  var month = today.getMonth();
  var monthlist = ["January","February","March","April","May","June","July","August","September","October","November","December"];
  document.getElementById("pdate").value=daylist[day]+", "+today.getDate()+" "+monthlist[month]+", "+today.getFullYear();
        }
        function CheckNum(me) {
    me.value = me.value.replace(/[a-z]/g, "");
}
function Check(me) {
    me.value = me.value.replace(/[&\/\\#,+()$~%.'":*?<>{}_0-9]/g, "");
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
<body  onload="pdate()">
    <script type="text/javascript">
    <?php
    if(isset($_SESSION['job_update']))
    {
        ?>
            alert("<?php echo $_SESSION['job_update'];?>");
            <?php
        unset($_SESSION['job_update']);
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
						<h4 class="page-title">About <?php echo $r['title'];?></h4>
			
						<div class="row">
							
							<div class="col-md-10">
								<div class="card">
                                                                    <form action="01CJobUpdate.php" method="post">
                                                                        <input type="hidden" name="jid" value="<?php echo $jid;?>"/>
                                                                        <table class="table">
                                                                            <tr>
                                                                                <td>Current Status<br/>
                                                                                <select name="status" class="form-control">
                                                                                        <option><?php echo $r['status'];?></option>
                                                                                        <option>Active</option>
                                                                                        <option>Not Active</option>
                                                                                    </select></td>
                                                                           
                                                                                <td>Company<br/><input type="text" name="cname" readonly value="<?php echo $r['cname'];?>" class="form-control"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Job Title<br/>
                                                                                    <input type="text" name="title" class="form-control"  value="<?php echo $r['title'];?>" onkeydown="Check(this)" onkeyup="Check(this)" /></td>
                                                                            
                                                                                <td>Salary<br/><input type="number" name="salary" class="form-control" value="<?php echo $r['salary'];?>" min="2000" max="200000"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                               <td>Job Category<br/><select name="category" class="form-control" required="required">
                                                                                       <option><?php echo $r['category'];?></option>
                                                                                        <?php 
                                                                                        foreach($category as $c)
                                                                                        {
                                                                                            echo "<option>".$c."</option>";
                                                                                        }
                                                                                        ?>
                                                                                     </select></td>
                                                                                     <td>Vacancy<br/><input type="number" name="vacancy"   class="form-control" value="<?php echo $r['vacancy'];?>" min="1" max="15" required="required"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Email<br/><input type="email" name="email" class="form-control" value="<?php echo $r['email'];?>"/></td>
                                                                           
                                                                                <td>Mobile<br/><input type="text" name="mobile" id="mobile" maxlength="10" onblur="setLimit()" class="form-control"  value="<?php echo $r['mobile'];?>" required="required" onkeydown="CheckNum(this)" onkeyup="CheckNum(this)" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contact's Person<br/><input type="text" name="cperson"  class="form-control" value="<?php echo $r['cperson'];?>" required="required" onkeydown="Check(this)" onkeyup="Check(this)"/></td>
                                                                                <td>Skills (eg. Java, PHP, HTML, etc.)<br/><input type="text" name="skills"  class="form-control" value="<?php echo $r['skills'];?>"  onkeydown="Check(this)" onkeyup="Check(this)" required="required" /></td>
                                                                            
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Qualification<br/><select name="qualification" class="form-control" required="required" >
                                                                                    <option><?php echo $r['qualification'];?> </option>
                                                                                   <?php
                                                                                    foreach($qualification as $q)
                                                                                   {
                                                                                       echo "<option>".$q."</option>";
                                                                                   }
                                                                                   ?>
                                                                                    </select></td>
                                                                                    <td>Percentage<br/><input type="number" name="percentage"  min="50" max="100"  class="form-control" value="<?php echo $r['percentage'];?>" required="required"/></td>
                                                                               </tr>
                                                                            <tr>
                                                                                <td>Job Post Date<br/><input type="text" name="pdate" readonly id="pdate" class="form-control" value="<?php echo $r['pdate'];?>"  required="required"/></td>
                                                                           
                                                                                <td>Job Interview Date<br/><input type="text" name="idate"  id="idate" class="form-control"  value="<?php echo $r['idate'];?>"  required="required"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Job Location<br/><textarea name="location" class="form-control" required="required"><?php echo $r['location'];?></textarea></td>
                                                                                <td>Job Description<br/><textarea name="description" class="form-control" required="required"><?php echo $r['description'];?></textarea></td>
                                                                           
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <input type="submit" value="Update Job" class="btn btn-success" /> | <a href="01CJobRemove.php?jid=<?php echo $jid;?>"  class="btn btn-danger">Remove</a>
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
	<!-- Modal -->
	
</body>

</html>
<?php
}
else
{
    echo "Sorry data not found.";
}
?>