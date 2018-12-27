<?php include"../includes/header.php"; ?>
<!-- Validation through javascript of the form  -->
<!-- Start javascript form here -->
<script type="text/javascript">
	function validation()
	{
		var user_name=document.create.user_name.value;
		var user_email=document.create.user_email.value;
		var password= document.create.password.value;
		var user_address = document.create.user_address.value;
		var image =document.create.image.value;
		if (user_name=="" || user_name==null) {
			alert("The user name is required");
			document.getElementById('user_name').style.borderColor="red";
			return false;
		}
		else if (user_email=="" || user_email==null) {
			alert("The Email address is required");
			document.getElementById('user_email').style.borderColor="red";
			return false;

		}
		else if (password=="" || password==null) {
			alert("The user password is required");
			document.getElementById('password').style.borderColor="red";
			return false;
		}
		else if (user_address=="" || user_address==null) {
			alert("The address of the user is required");
			document.getElementById('user_address').style.borderColor="red";
			return false;
		}
		else if (image=="" || image==null) {
			alert("The Picture is required");
			document.getElementById('image').style.borderColor="red";
			return false;
		}
	}
</script>
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
                      // Action on click of the button 
                      	if (isset($_POST["submit"])) {
                      		$user_name=mysqli_real_escape_string($conn,$_POST["user_name"]);
                      		$user_email=mysqli_real_escape_string($conn,$_POST["user_email"]);
                      		$password=mysqli_real_escape_string($conn,$_POST["password"]);
                      		$user_address=mysqli_real_escape_string($conn,$_POST["user_address"]);
                      		$filename = $_FILES["image"]['name'];
							$tempname = $_FILES["image"]['tmp_name'];
							$ext 			  = pathinfo($filename, PATHINFO_EXTENSION);
							$size	= $_FILES["image"]["size"]; 
							$folder="images/".$filename;
							$uploadok=1;
							//Checking the user if exist
							if ($user_name) {
								$stmt=$conn->prepare("SELECT * FROM users WHERE user_name=?");
								$stmt->bind_param("s",$user_name);
								$stmt->execute();
		   				 		 $result = $stmt->get_result();
		    					if ($result->num_rows > 0) {
		 						   	$err_user="<font color='red'><h4> The <b>$user_name</b> is already exist try another one</h4></font>";
		 						   	$uploadok=0;
		    					}
							}
							//Checking mail if already exist
							 if ($user_email) {
								$stmt=$conn->prepare("SELECT * FROM users WHERE user_email=?");
								$stmt->bind_param("s",$user_email);
								$stmt->execute();
		   				 		 $result = $stmt->get_result();
		    					if ($result->num_rows > 0) {
		 						   	$err_mail="<font color='red'><p> The <b>$user_email</b> is already exist try another one</b></font>";
		 						   	$uploadok=0;
		    					}
							}
							// Checking file if that is already exist in the folder
							if (file_exists($folder)) {
								$err_pic="<font color='red'>The file is already exist</font>";
		 					   	$uploadok=0;
								
							}
							//Checking the extension of the uploading file					
							if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif'){
								$err_pic="<font color='red'>Only JPG PNG JPEG and gif type is allowed</font>";
								$uploadok = 0;
							}
							if ($uploadok==1) {
								move_uploaded_file($tempname, $folder);
								$stmt=$conn->prepare("INSERT INTO users (user_name, user_email, password, user_address, image) VALUES(?,?,?,?,?)");
								$stmt->bind_param("sssss",$user_name,$user_email,$password,$user_address,$folder);
								if ($stmt->execute()) {
									echo "<script>window.location='index_admin.php'</script>";
								}
							}



                      	}
                      ?>
                    </div>
                    <div class="x_content">
                    	<form method="post" name="create" onsubmit="return validation()" enctype="multipart/form-data">
                      		<div class="row">
                        	
								<div class="col-md-4">
									<div class="form-group">
		                          		<label><b> User Name</b></label>
		                          		<input type="text" name="user_name" class="form-control" placeholder="Enter User Name" id="user_name">
		                          		<?php 
		                          			if (isset($err_user)) {
		                          				echo $err_user;
		                          			}
		                          		?>
                          			</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
		                          		<label><b> Email Address</b></label>
		                          		<input type="email" name="user_email" class="form-control" placeholder="Enter User Email Address" id="user_email">
		                          		<?php if (isset($err_mail)) {
		                          			echo $err_mail;
		                          		} ?>
		                          	</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
		                          		<label><b> Password</b></label>
		                          		<input type="password" name="password" class="form-control" placeholder="Enter password" id="password">
		                          	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
		                          		<label><b>Address</b></label>
		                          		<input type="text" name="user_address" class="form-control" placeholder="Enter Address of the admin" id="user_address">
		                          	</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
		                          		<label><b>Image</b></label>
		                          		<input type="file" name="image" class="form-control" id="image" id="user_address">
		                          		<?php 
		                          			if (isset($err_pic)) {
		                          				echo $err_pic;
		                          			}
		                          		?>
		                          	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									
                          	<div class="form-group">
                          		<button type="submit" class="btn btn-info" name="submit"><i class="fa fa-plus-square"></i> Add New Admin</button>
                          		<a href="index_admin.php" class="btn btn-danger" ><i class="fa fa-times"></i> Cancel</a>
                          	</div>
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