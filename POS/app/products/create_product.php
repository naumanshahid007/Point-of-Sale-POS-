<?php include "../includes/header.php" ?>
<div class="right_col" role="main">
	              
      <div class="row">

        <!-- start of pannel -->
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Create Pnew Product</h2>
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
           			$product_name=mysqli_real_escape_string($conn,$_POST["product_name"]);
           			$manufacturer=mysqli_real_escape_string($conn,$_POST["manufacturer"]);
           			$stmt=$conn->prepare("INSERT INTO products (product_name,manufacturer) VALUES(?,?)");
           			$stmt->bind_param("ss",$product_name,$manufacturer);
           			if ($stmt->execute()) {
           				echo "<script>window.location='index_products.php'</script>";
           			}


           		}


           	?>
            <div class="x_content">
             <form method="post">
             	<div class="row">
                <div class="col-md-4">
                 <div class="form-group">
                 	<label>Name </label>
                 	<input required type="text" name="product_name" class="form-control" placeholder="Product Name ">
                 </div>
                </div>
                <div class="col-md-4">
                 <div class="form-group">
                 	<label>Manufacturer </label>
                 	<input required type="text" name="manufacturer" class="form-control" placeholder="Manufacturer">
                 </div>
                </div>
                </div>
                <br>
              <div class="row">
              	<button required type="submit" class="btn btn-success" name="submit"><i class="fa fa-plus-square"></i> Add New product</button>
              	<a href="index_desitrbuter.php" class="btn btn-danger" ><i class="fa fa-times"></i> Cancel</a>
              	
              </div>
             
             </form> 
          </div>
        </div>
        <!-- end of pannel -->
      </div>
    
  </div>
<?php include "../includes/footer.php" ?>
