<div class="scrollbar-inner sidebar-wrapper">
<div class="user">
						<div class="photo">
                                                    <img src="../pic/<?php  echo $r['pic'];?>"/>
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $r['name'];?>
									<span class="user-level"><?php echo $r['qualification'];?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
                                                    <a href="01SHome.php">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
								
							</a>
						</li>
                                               <li class="nav-item">
                                                   <a href="01SJobs.php">
								<i class="la la-jsfiddle"></i>
								<p>Jobs</p>
							</a>
						</li>
                                                <li class="nav-item">
                                                    <a href="01SJobsApplied.php">
								<i class="la la-fonticons"></i>
								<p>Jobs Applied</p>
							</a>
						</li>
                                                <li class="nav-item">
                                                    <a href="logout.php">
								<i class="la la-fonticons"></i>
								<p>Logout</p>
							</a>
						</li>
						
					</ul>
</div>