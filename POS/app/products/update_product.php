<?php include "../includes/header.php" ?>
<?php 
$id=$_GET["id"];
     $stmt=$conn->prepare("SELECT * FROM products WHERE id=?");
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
              <h2>Update Product</h2>
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
           			// echo $name,$father_name,$cnic,$phone_no,$address;
           			// die;
           			$stmt=$conn->prepare("UPDATE products SET product_name=?, manufacturer=? WHERE id=?");
           			$stmt->bind_param("sss",$product_name,$manufacturer,$id);
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
                 	<label>Product Name </label>
                 	<input required type="text" name="product_name" class="form-control" placeholder="Your Name " value="<?php echo $row["product_name"]; ?>">
                 </div>
                </div>
                <div class="col-md-4">
                 <div class="form-group">
                 	<label>Manufracturer</label>
                 	<input required type="text" name="manufacturer" class="form-control" placeholder=" Manufracturer Name " value="<?php echo $row["manufacturer"]; ?>">
                 </div>
                </div>
               

              </div>
             
              </div>
              <div class="row">
              	<button required type="submit" class="btn btn-success" name="submit"><i class="fa fa-save"></i> Update Product</button>
              	<a href="index_products.php" class="btn btn-danger" ><i class="fa fa-times"></i> Cancel</a>
              	
              </div>
             </div>
             </form> 
          </div>
        </div>
        <!-- end of pannel -->
      </div>
    
  </div>
<?php include "../includes/footer.php" ?>
