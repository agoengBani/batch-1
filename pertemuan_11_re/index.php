<!doctype html>
<html lang="en">

<head>
    <?php include('layouts/css.php') ?>
</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="light"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <?php include('layouts/header.php') ?>

        <!-- ========== Left Sidebar Start ========== -->
        <?php include('layouts/left-sidebar.php') ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <?php include($_REQUEST['page'] . '.php') ?>
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