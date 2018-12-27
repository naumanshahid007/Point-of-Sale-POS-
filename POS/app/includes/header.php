   <?php include"../includes/connection.php"; ?>
  <?php include"../includes/session.php"; ?>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	

        <title>Point of sale </title>

        <!-- Bootstrap -->
        <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    	
        <!-- bootstrap-progressbar -->
        <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../../build/css/custom.min.css" rel="stylesheet">
      </head>

      <body class="nav-md">
        <div class="container body">
          <div class="main_container">
            <div class="col-md-3 left_col">
              <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                  <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Point of Sale</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                  <div class="profile_pic">
                    <?php  
                      $stmt=$conn->prepare("SELECT * FROM users WHERE user_name='$user_info'");
                      $stmt->execute();
                      $result= $stmt->get_result();
                      $result->num_rows;
                      $row=$result->fetch_array();

                    ?>
                    <img src="../admin/<?php echo $row['image'] ?>" alt="..." class="img-circle profile_img">
                  </div>
                  <div class="profile_info">
                    <span>Welcome,</span>
                    <h2><?php echo $user_info; ?></h2>
                  </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                  <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                      <li>
                        <a><i class="fa fa-home"></i> Home</a>
                      </li>
                      <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="form.html">General Form</a></li>
                          <li><a href="form_advanced.html">Advanced Components</a></li>
                          <li><a href="form_validation.html">Form Validation</a></li>
                          <li><a href="form_wizards.html">Form Wizard</a></li>
                          <li><a href="form_upload.html">Form Upload</a></li>
                          <li><a href="form_buttons.html">Form Buttons</a></li>
                        </ul>
                      </li>
                       <li><a><i class="fa fa-user"></i> Admin <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="../admin/index_admin.php">Manage Admin</a></li>
                          
                        </ul>
                      </li>
                      <li><a href="#"><i class="fab fa-dochub"></i>Distributor <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                              <li><a href="../distributer/index_distributer.php">Distributor Record</a></li>
                        </ul>
                     </li>
                      <li><a><i class="fa fa-users"></i> Customer <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="../customer/index_customer.php">Customer Record</a></li>
                          
                        </ul>
                      </li>
                      <li><a href="#"><i class="fa fa-product-hunt"></i> Products<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="../products/index_products.php">Products Record</a></li>
                      </ul>
                    </li>
                      <li><a href="#"><i class="fa fa-sign-in"></i> Purchase Invoice <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="purchase_invoice.php">Purchase Invoice Record</a></li>
                      </ul>
                    </li>
                      <li><a href="#"><i class="fa fa-sign-out"></i> Sale invoice<span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">
                        <li><a href="sale_invoice.php">Sale Invoice</a></li>
                        <li><a href="view_sale_invoice.php">View Sale Invoices</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="glyphicon glyphicon-adjust"></i> &nbsp;&nbsp;&nbsp;Stock <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="available_stock.php">Available</a></li>
                        <li><a href="sold_stock.php">Sold</a></li>
                      </ul>
                        </li>
                                 
                    </ul>
                  </div>
                  <div class="menu_section">
                    
                    <ul class="nav side-menu">
                      
                      
                      <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#level1_1">Level One</a>
                            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                <li class="sub_menu"><a href="level2.html">Level Two</a>
                                </li>
                                <li><a href="#level2_1">Level Two</a>
                                </li>
                                <li><a href="#level2_2">Level Two</a>
                                </li>
                              </ul>
                            </li>
                            <li><a href="#level1_2">Level One</a>
                            </li>
                        </ul>
                      </li>                  
                      <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                    </ul>
                  </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                
                <!-- /menu footer buttons -->
              </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
              <div class="nav_menu">
                <nav>
                  <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                  </div>

                  <ul class="nav navbar-nav navbar-right">
                    <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/img.jpg" alt=""><?php echo $user_info; ?>
                        <span class=" fa fa-angle-down"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        
                        <li><a href="../index/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                      </ul>
                    </li>

                    <li role="presentation" class="dropdown">
                      <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                      </a>
                      <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <div class="text-center">
                            <a>
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /top navigation -->