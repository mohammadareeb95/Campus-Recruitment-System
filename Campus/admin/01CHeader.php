<div class=" sidebar-wrapper">
					<div class="user">
						<div class="photo">
                                                    <img src="../pic/<?php  echo $_SESSION['cpic'];?>">
						</div>
						<div class="info">
							<a class=""  >
								<span>
									<?php echo $_SESSION['cname'];?>
									<span class="">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
                                                    <a href="01CHome.php">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
								
							</a>
						</li>
                                                <li class="nav-item">
                                                    <a href="01CJobRequests.php">
								<i class="la la-fonticons"></i>
								<p>View Requests</p>
							</a>
						</li>
                                                <li class="nav-item">
                                                    <a href="01CViewCandidate.php">
								<i class="la la-fonticons"></i>
								<p>View Candidate</p>
							</a>
						</li>
                                              <li class="nav-item">
                                                  <a href="01CJobs.php">
								<i class="la la-joomla"></i>
								<p>View Jobs</p>
							</a>
						</li>
                                                <li class="nav-item">
                                                    <a href="01CJobRegister.php">
								<i class="la la-paragraph"></i>
								<p>Add Jobs</p>
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