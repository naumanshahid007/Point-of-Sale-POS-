<?php include "../includes/header.php" ?>
<?php 
$id=$_GET["id"];
     $stmt=$conn->prepare("SELECT * FROM distributors WHERE id=?");
      $stmt->bind_param("s",$id);
      $stmt->execute();
      $result = $stmt->get_result();
      $result->num_rows;
    $row=$result->fetch_array();




?>
	<div class="right_col" role="main">           
      <div class="row">

        <!-- start of pannel -->
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Update Distributer</h2>
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

            </div>
           	<?php 
           		if (isset($_POST["submit"])) {
           			$name=mysqli_real_escape_string($conn,$_POST["name"]);
           			$father_name=mysqli_real_escape_string($conn,$_POST["father_name"]);
           			$cnic=mysqli_real_escape_string($conn,$_POST["cnic"]);
           			$phone_no=mysqli_real_escape_string($conn,$_POST["phone_no"]);
           			$address=mysqli_real_escape_string($conn,$_POST["address"]);
           			// echo $name,$father_name,$cnic,$phone_no,$address;
           			// die;
           			$stmt=$conn->prepare("UPDATE distributors SET name=?, father_name=?,cnic=?,phone_no=?,address=? WHERE id=?");
           			$stmt->bind_param("ssssss",$name,$father_name,$cnic,$phone_no,$address,$id);
           			if ($stmt->execute()) {
           				echo "<script>window.location='index_distributer.php'</script>";
           			}


           		}


           	?>
            <div class="x_content">
             <form method="post">
             	<div class="row">
                <div class="col-md-4">
                 <div class="form-group">
                 	<label>Name </label>
                 	<input required type="text" name="name" class="form-control" placeholder="Your Name " value="<?php echo $row["name"]; ?>">
                 </div>
                </div>
                <div class="col-md-4">
                 <div class="form-group">
                 	<label> Father Name </label>
                 	<input required type="text" name="father_name" class="form-control" placeholder="Your Father Name " value="<?php echo $row["father_name"]; ?>">
                 </div>
                </div>
                <div class="col-md-4">
                 <div class="form-group">
                 	<label>CNIC </label>
                 	<input required type="text" name="cnic" class="form-control"   placeholder="Enter Your CNIC no" value="<?php echo $row["cnic"]; ?>">
                 </div>
                </div>

              </div>
              <div class="row">
              	<div class="col-md-4">
                 <div class="form-group">
                 	<label>Phone No </label>
                 	<input required type="text" name="phone_no" class="form-control" placeholder="Phone No " value="<?php echo $row["phone_no"]; ?>">
                 </div>
                </div>
                <div class="col-md-4">
                 <div class="form-group">
                 	<label>Address </label>
                 	<input required type="text" name="address" class="form-control" placeholder="Your Address "value="<?php echo $row["address"]; ?>">
                 </div>
                </div>
              </div>
              <div class="row">
              	<button required type="submit" class="btn btn-success" name="submit"><i class="fa fa-save"></i> Update Distributer</button>
              	<a href="index_distributer.php" class="btn btn-danger" ><i class="fa fa-times"></i> Cancel</a>
              	
              </div>
             </div>
             </form> 
          </div>
        </div>
        <!-- end of pannel -->
      </div>
    
  </div>
<?php include "../includes/footer.php" ?>
