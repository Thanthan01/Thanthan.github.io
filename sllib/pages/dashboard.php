
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SLTCFI | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="icon" type="text/css" href="../img/logo.png">
  <link rel="stylesheet" href="../templates/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../templates/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../templates/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../templates/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../templates/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../templates/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../templates/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../templates/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../templates/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('session.php'); ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SL</b>LIB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SLTCFI</b> | LIB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <?php
              include('include/dbcon.php');
              $user_query=mysqli_query($con,"select *  from admin where admin_id='$id_session'")or die(mysqli_error());
              $row=mysqli_fetch_array($user_query); {
            ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if($row['admin_image'] != ""){ ?>
              <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="user-image" alt="User Image">
              <?php }else{?>
              <img src="../img/logo.png" class="user-image" alt="User Image">
              <?php }?>
              <span class="hidden-xs"><?php echo $row['firstname']; ?></span>
            </a>
            <?php } ?>
            <ul class="dropdown-menu">
              <!-- User image -->
                <?php
  include('include/dbcon.php');
  $user_query=mysqli_query($con,"select *  from admin where admin_id='$id_session'")or die(mysqli_error());
  $row=mysqli_fetch_array($user_query); {
?>
              <li class="user-header">
                <?php if($row['admin_image'] != ""){ ?>
                <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
                <?php }else{ ?>
                  <img src="../img/logo.png" class="img-circle" alt="User Image">
                  <?php }?>
                <p>
                   
                  <?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname']; ?>
                  <small></small>
                </p>
                 <?php } ?>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
  include('include/dbcon.php');
  $user_query=mysqli_query($con,"select *  from admin where admin_id='$id_session'")or die(mysqli_error());
  $row=mysqli_fetch_array($user_query); {
?>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if($row['admin_image'] != ""){ ?>
          <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
          <?php }else{ ?>
           <img src="../img/logo.png" class="img-circle" alt="User Image">
<?php } ?>
        </div>
        <div class="pull-left info">
           
          <p><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname']; ?></p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
           <?php } ?>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">File Information</li>
       <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
        <li><a href="member.php"><i class="fa fa-users "></i> <span>Members</span></a></li>
        <li><a href="book.php"><i class="fa fa-book "></i> <span>Books</span></a></li>
        <li><a href="admin.php"><i class="fa fa-user"></i> <span>Admin</span></a></li>
        <li><a href="attendances.php"><i class="fa fa-users"></i> <span>Members Attendances</span></a></li>
        </a></li>
        <li class="header">Transaction Information</li>
        <li><a href="borrow.php"><i class="fa fa-edit"></i> <span>Transaction</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        
        <ul class="treeview-menu">
          <li><a href="borrowed.php"><i class="fa fa-book"></i> <span>Borrowed Books</span></a></li>
        <li><a href="returned.php"><i class="fa fa-book"></i> <span>Returned Books</span></a></li>
        </ul>
        </li>
        <li><a href="setting.php"><i class="fa fa-cogs"></i> <span>Setting</span></a></li>
        <li><a href="about.php"><i class="fa fa-info"></i> <span>About Us</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      <br>
      <div class="container">
        <div class="row">
        
          <div class="row">
           
              <div class="col-xs-2">
                <?php
              $result = mysqli_query($con,"SELECT * FROM admin");
              $num_rows = mysqli_num_rows($result);
              ?>
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo $num_rows; ?></h3>

                    <p>Admins</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <a href="admin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
               <div class="col-xs-2">
                <!-- small box -->
                <?php
              $result = mysqli_query($con,"SELECT * FROM user");
              $num_rows = mysqli_num_rows($result);
              ?>
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo $num_rows; ?></h3>

                    <p>Members</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-male"></i>
                  </div>
                  <a href="attendances.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
               <div class="col-xs-2">
              <?php
              $result = mysqli_query($con,"SELECT * FROM book");
              $num_rows = mysqli_num_rows($result);
              ?>
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo $num_rows; ?></h3>

                    <p>Books</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-book"></i>
                  </div>
                  <a href="book.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
               <div class="col-xs-2">
              <?php
              $result = mysqli_query($con,"SELECT * FROM borrow_book");
              $num_rows = mysqli_num_rows($result);
              ?>
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo $num_rows; ?></h3>

                    <p>Book Borrowed</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-book"></i>
                  </div>
                  <a href="borrowed.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
               <div class="col-xs-3">
              <?php
              $result = mysqli_query($con,"SELECT * FROM return_book");
              $num_rows = mysqli_num_rows($result);
              ?>
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo $num_rows; ?></h3>

                    <p>Book Returned</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-book"></i>
                  </div>
                  <a href="returned.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            
          </div>
       
        
      </div>
      </div>
      
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="../img/slide3.jpg" alt="First slide" class="img-reponsive img-rounded">

                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                  <div class="item">
                    <img src="../img/slide2.jpg" alt="Second slide" class="img-reponsive img-rounded">

                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                  <div class="item">
                    <img src="../img/slide1.jpg" alt="Third slide" class="img-reponsive img-rounded">

                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          
          <!-- /.box -->
    </section>

 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">SLTCFI | LIB</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../templates/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../templates/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../templates/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../templates/bower_components/raphael/raphael.min.js"></script>
<script src="../templates/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../templates/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../templates/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../templates/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../templates/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../templates/bower_components/moment/min/moment.min.js"></script>
<script src="../templates/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../templates/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../templates/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src=../templates/"bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../templates/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../templates/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src=" ../templates/dist/js/demo.js"></script>
</body>
</html>
