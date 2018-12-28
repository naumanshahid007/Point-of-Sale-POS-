<?php include"../includes/header.php"; ?>
<!-- Validation through javascript of the form  -->
<!-- Start javascript form here -->
<!-- Javascript ends here -->
	<div class="right_col" role="main">
		<div class="row">

                <!-- start of pannel -->
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Create New Admin</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                      <?php 



                      ?>
                    </div>
                    <div class="x_content">
                    	<form method="GET">
                      		<div class="row">
                        	
								<div class="col-md-4">
									<div class="form-group">
		                          		<label><b> User Name</b></label>
		                          		<input type="text" name="user_name" class="form-control" placeholder="Enter User Name" id="user_name">
		                          		
                          			</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
		                          		<label><b> Email Address</b></label>
		                          		<input type="email" name="user_email" class="form-control" placeholder="Enter User Email Address" id="user_email">
		                          		
		                          	</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
		                          		<label><b> Password</b></label>
		                          		<input type="password" name="password" class="form-control" placeholder="Enter password" id="password">
		                          	</div>
								</div>
							</div>

							<input type="submit" name="SUBMIT">		
							
							<div class="row">
									
                          		<div class="form-group">
                          			<button type="submit" class="btn btn-info" name="submit"><i class="fa fa-plus-square"></i> Add New Admin</button>
 	                         		<a href="index_admin.php" class="btn btn-danger" ><i class="fa fa-times"></i> Cancel</a>
  	                        	</div>
							</div>
                        </form>
                      
                     </div>
                  </div>
                </div>
                <!-- end of pannel -->
              </div>
            
          </div>
<?php include"../includes/footer.php"; ?>