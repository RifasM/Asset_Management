<!DOCTYPE html>
<html lang="en">
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $pdate = $_POST['pur_date'];
      $make = $_POST['make'];
      $corema = $_POST['core_make'];
      $corety = $_POST['core_type'];
      $corefre = $_POST['core_freq'];
      $arch = $_POST['arch'];
      $os = $_POST['OS'];
      $ramm = $_POST['ram_make'];
      $ramf = $_POST['ram_freq'];
      $ramt = $_POST['ram_type'];
      $rams = $_POST['Ram'];
      $eram = $_POST['extra_ram'];
      $moth = $_POST['mot_make'];
      $dvd = $_POST['dvd_make'];
      $usb = $_POST['usb'];
      $sound = $_POST['sound'];
      $wifi = $_POST['wifi'];
      $blue = $_POST['bluetooth'];
      $speaker = $_POST['speaker'];
      $hdd = $_POST['hard_disk'];
      $flag=1;
      foreach ($_POST as $key) {
        if($key==''){
          echo '<script language="javascript">';
          echo 'alert("Fill in all the fields")';
          echo '</script>';
          break;
          $flag=0;
        }
      }
      $sql = "INSERT INTO cpu VALUES";
      $sql = $sql.'(';
      if($flag==0 && ($arch==1 || $wifi==1 || $blue ==1 || $speaker==1 || $sound==1) ){
        echo '<script language="javascript">';
        echo 'alert("Fill in all the fields")';
        echo '</script>';
      }
      else{
        foreach ($_POST as $key) {
          $sql=$sql."'".$key."', ";
        }
        $sql = rtrim($sql, ", ").');';
      }
      echo $sql;
    }
      /*include("config.php");
      session_start();
      if(!isset($_SESSION['name'])){
          header('Location: index.php');
          exit();
      }*/
 ?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CMR Admin Console - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CMR Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Assets</span>
      </a>
      <div id="collapseSome" data-toggle="collapse" aria-expanded="true" aria-controls="collapse">
        <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="../entry.php">Enter new Asset</a>
          <a class="collapse-item" href="../delete.php">Delete Asset</a>
          <a class="collapse-item" href="../modify.php">Modify Asset</a>
        </div>
      </div>
    </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="../utilities-color.php">Colors</a>
            <a class="collapse-item" href="../utilities-border.php">Borders</a>
            <a class="collapse-item" href="../utilities-animation.php">Animations</a>
            <a class="collapse-item" href="../utilities-other.php">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="../index.php">Login</a>
            <a class="collapse-item" href="../register.php">Register</a>
            <a class="collapse-item" href="../forgot-password.php">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="../404.php">404 Page</a>
            <a class="collapse-item" href="../blank.php">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="../charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="../tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php $name ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Select Asset Type</h6>
          </div>
          <div class="card-body">
            <div class="dropdown no-arrow mb-4">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Asset Type
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">CPU</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/monitor.txt">Monitor</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">Mouse</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">Keyboard</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">Printer</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">Speaker</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">Lan Box</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">CRO</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">Scanner</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">WiFi Router</a>
                <a class="dropdown-item" href="#" onClick="Asset_Fields/cpu.txt">Others</a>
              </div>
            </div>
          </div>
        </div>
        <div class="container">

          <!-- Outer Row -->
          <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-cpu-image"></div>
                    <div class="col-lg-6">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">CPU Data Entry</h1>
                        </div>
                        <form class="user" method="post" action="">
                          <div class="form-group">
                            Enter Purchase Date:
                            <input type="text" class="form-control form-control-user" name="pur_date" id="pur_date" aria-describedby="make" placeholder="Enter Purchase Date...">
                          </div>
                          <div class="form-group">
                            Enter Make:
                            <input type="text" class="form-control form-control-user" name="make" id="make" aria-describedby="make" placeholder="Enter Make...">
                          </div>
                          <div class="form-group">
                            Enter Core Make:
                            <input type="text" class="form-control form-control-user" name="core_make" id="core_make" aria-describedby="core_make" placeholder="Enter Core Make...">
                          </div>
                          <div class="form-group">
                            Enter Architecture:
                                <div class="dropdown no-arrow mb-4">
                                  <select class="btn btn-secondary dropdown-toggle" type="button" name="arch" id="arch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option class="dropdown-item" value="1" id="default">Select CPU Architecture Type</option>
                                    <option class="dropdown-item" value="2" id="a1">x86 - 32 Bit</option>
                                    <option class="dropdown-item" value="3" id="a2">x64 - 64 Bit</option>
                                  </select>
                                </div>
                          </div>
                          <div class="form-group">
                            Enter Core Type:
                            <input type="text" class="form-control form-control-user" name="core_type" id="core_type" aria-describedby="core_type" placeholder="Enter Core Type(i3, i5, etc)...">
                          </div>
                          <div class="form-group">
                            Enter Core Frequency:
                            <input type="text" class="form-control form-control-user" name="core_freq" id="core_freq" aria-describedby="core_freq" placeholder="Enter Core Frequency...">
                          </div>
                          <div class="form-group">
                            Enter RAM Make:
                            <input type="text" class="form-control form-control-user" name="ram_make" id="ram_make" aria-describedby="ram_make" placeholder="Enter RAM Make...">
                          </div>
                          <div class="form-group">
                            Enter RAM capacity:
                            <input type="text" class="form-control form-control-user" name="Ram" id="Ram" aria-describedby="Ram" placeholder="Enter Ram Size...">
                          </div>
                          <div class="form-group">
                            Enter Ram Frequency:
                            <input type="text" class="form-control form-control-user" name="ram_freq" id="ram_freq" aria-describedby="ram_freq" placeholder="Enter RAM Frequency...">
                          </div>
                          <div class="form-group">
                            Enter RAM Type:
                            <input type="text" class="form-control form-control-user" name="ram_type" id="ram_type" aria-describedby="ram_type" placeholder="Enter RAM Type(DDR3, DDR4, etc)...">
                          </div>
                          <div class="form-group">
                            Enter Extra RAM Size:
                            <input type="text" class="form-control form-control-user" name="extra_ram" id="extra_ram" aria-describedby="extra_ram" placeholder="Enter Extra RAM Capacity...">
                          </div>
                          <div class="form-group">
                            Enter Motherboard Make:
                            <input type="text" class="form-control form-control-user" name="mot_make" id="mot_make" aria-describedby="mot_make" placeholder="Enter Motherboard Make...">
                          </div>
                          <div class="form-group">
                            Enter hard disk capacity:
                            <input type="text" class="form-control form-control-user" name="hard_disk" id="hard_disk" aria-describedby="hard_disk" placeholder="Enter hard disk size...">
                          </div>
                          <div class="form-group">
                            Enter OS Type:
                            <input type="text" class="form-control form-control-user" name="OS" id="OS" aria-describedby="OS" placeholder="Enter OS Type...">
                          </div>
                          <div class="form-group">
                            Enter CD Drive Make:<br>
                            <font size="1%">If no DVD, enter None </font>
                            <input type="text" class="form-control form-control-user" name="dvd_make" id="dvd_make" aria-describedby="dvd_make" placeholder="Enter DVD Make...">
                          </div>
                          <div class="form-group">
                            Enter no. of USB Slots:
                            <input type="text" class="form-control form-control-user" name="usb" id="usb" aria-describedby="usb" placeholder="Enter no. of USB ports...">
                          </div>
                          <div class="form-group">
                            Sound Card Status:
                            <div class="dropdown no-arrow mb-4">
                              <select class="btn btn-secondary dropdown-toggle" type="button" name="sound" id="sound" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option class="dropdown-item" value="1" id="default">Select Sound Card State</option>
                                <option class="dropdown-item" value="Installed" id="s1">Installed</option>
                                <option class="dropdown-item" value="Not Installed" id="s2">Not Installed</option>
                              </select>
                              </div>
                            </div>
                            <div class="form-group">
                              Bluetooth Status:
                              <div class="dropdown no-arrow mb-4">
                                <select class="btn btn-secondary dropdown-toggle" type="button" name="bluetooth" id="bluetooth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <option class="dropdown-item" value="1" id="default">Select Bluetooth State</option>
                                  <option class="dropdown-item" value="Installed" id="b1">Installed</option>
                                  <option class="dropdown-item" value="Not Installed" id="b2">Not Installed</option>
                                </select>
                                </div>
                              </div>
                              <div class="form-group">
                                WiFi Status:
                                <div class="dropdown no-arrow mb-4">
                                  <select class="btn btn-secondary dropdown-toggle" type="button" name="wifi" id="wifi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option class="dropdown-item" value="1" id="default">Select WiFi State</option>
                                    <option class="dropdown-item" value="Installed" id="w1">Installed</option>
                                    <option class="dropdown-item" value="Not Installed" id="w2">Not Installed</option>
                                  </select>
                                  </div>
                                </div>
                        <div class="form-group">
                          Speaker Status:
                          <div class="dropdown no-arrow mb-4">
                            <select class="btn btn-secondary dropdown-toggle" type="button" name="speaker" id="speaker" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <option class="dropdown-item" value="1" id="default">Select Speaker State</option>
                              <option class="dropdown-item" value="Installed" id="p1">Installed</option>
                              <option class="dropdown-item" value="Not Installed" id="p2">Not Installed</option>
                            </select>
                            </div>
                          </div>
                          <hr>
                          <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; CMR Group 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout<?php SESSION_DESTROY();?></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
