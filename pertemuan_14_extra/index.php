<?php
session_start();

// validasi sesi login
if (!isset($_SESSION['login'])) {
   header('location: auth/login.php');
   exit;
}
?>

<!doctype html>
<html lang="en">

<head>
   <?php include('layouts/css.php') ?>
</head>

<body data-sidebar="dark">

   <!-- <body data-layout="horizontal" data-topbar="light"> -->

   <!-- Begin page -->
   <div id="layout-wrapper">
      <!-- Topbar -->
      <?php include('layouts/topbar.php') ?>

      <!-- ========== Left Sidebar Start ========== -->
      <?php include('layouts/left-sidebar.php') ?>
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
         <?php include('pages/' . $_REQUEST['page'] . '.php'); ?>
      </div>
      <!-- end main content-->

   </div>
   <!-- END layout-wrapper -->

   <!-- Right Sidebar -->
   <?php include('layouts/right-sidebar.php') ?>
   <!-- /Right-bar -->

   <!-- Right bar overlay-->
   <div class="rightbar-overlay"></div>

   <!-- JAVASCRIPT -->
   <?php include('layouts/js.php') ?>
</body>

</html>

<?php unset($_SESSION['msg']); ?>