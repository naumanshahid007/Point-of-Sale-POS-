<?php include "../includes/header.php" ?>
<style type="text/css">
#delete:hover{
	color: red;
	font-size: 22px;
	margin: 0 auto;
}
#edit:hover{
	color: skyblue;
	font-size: 22px;
	margin: 0 auto;

}
</style>

<div class="right_col" role="main">
	              
	              <div class="row">

	                <!-- start of pannel -->
	                <div class="col-md-12 col-sm-12 col-xs-12">
	                	<h2>Manage Customers</h2>
                <div class="x_panel">
                  <div class="x_title">
                   <a href="create_customer.php" class="btn btn-success"><i class="fa fa-plus-square"></i> Add New Customer</a>
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
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>CNIC</th>
                        <th>Phone </th>
                        <th>Address</th>
                        <th>Update</th>
                         <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>

                      	<!-- Query to fetvh record from the datebase -->
                      	<!-- php Start from here -->
                      	<?php 
                      		$stmt=$conn->prepare("SELECT * FROM  customer");
                      		$stmt->execute();
            							$result= $stmt->get_result();
            				 			$result->num_rows;
            				 			while ($row=$result->fetch_array()) {
            				 				
            				 			?>
                      	<!-- Php Ends Here  -->

                      	<tr>
                      		<td><?php echo $row["name"]; ?></td>
                      		<td><?php echo $row["father_name"]; ?></td>
                      		<td><?php echo $row["cnic"]; ?></td>
                      		
                      		<td><?php echo $row["phone_no"]; ?></td>
                      		<td><?php echo $row["address"]; ?></td>
                      		<td>
                      			<a href="update_customer.php?id=<?php echo $row['id']; ?>" style="margin:20px;font-size: 18px;" id="edit"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit record"></i></a></td></td>
                      			<td><a href="delete_customer.php?id=<?php echo $row['id']; ?>" style="margin:10px;font-size: 18px;"id="delete" data-toggle="tooltip" data-placement="top" title="Delete record" onclick="return confirm('Are you sure to delte this record')"><i class="fa fa-trash"></i></a>

                      		</td>
                      	</tr>
                        <?php 
                      	}	
                      	?>
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
	                <!-- end of pannel -->
	              </div>
	            
	          </div>
<?php include"../includes/footer.php" ?>
<script src="../../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>