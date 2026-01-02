<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Appzia - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="assets/libs/morris.js/morris.css">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="light"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-dark.png" alt="logo-sm-dark" height="26">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="logo-dark" height="24">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-light.png" alt="logo-sm-light" height="26">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="logo-light" height="24">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="ri-search-line"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">Adam</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="ri-settings-2-line"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="dashboard.php" class="waves-effect">
                                <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="form_mahasiswa.php" class=" waves-effect">
                                <i class="ri-user-add-fill"></i>
                                <span>Form Mahasiswa</span>
                            </a>
                        </li>

                        <li>
                            <a href="table_mahasiswa.php" class=" waves-effect">
                                <i class="ri-ball-pen-fill"></i>
                                <span>Table Mahasiswa</span>
                            </a>
                        </li>

                        <li>
                            <a href="form_dosen.php" class=" waves-effect">
                                <i class=" ri-user-add-line"></i>
                                <span>Form Dosen</span>
                            </a>
                        </li>

                        <li>
                            <a href="table_dosen.php" class=" waves-effect">
                                <i class=" ri-ball-pen-line"></i>
                                <span>Table Dosen</span>
                            </a>
                        </li>

                        <li>
                            <a href="profile.php" class=" waves-effect">
                                <i class=" ri-account-circle-fill"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tabel Dosen</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <!-- end row -->
                    <div class="row">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Tabel Data Dosen</h4>

                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Lulusan</th>
                                                                    <th>Alamat</th>
                                                                    <th>Agama</th>
                                                                    <th>Kontak</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Garrett Winters</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>budhha</td>
                                                                    <td>2011/07/25</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>protestan</td>
                                                                    <td>2009/01/12</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>ateis</td>
                                                                    <td>2012/03/29</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Airi Satou</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>hindu</td>
                                                                    <td>2008/11/28</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Brielle Williamson</td>
                                                                    <td>Integration Specialist</td>
                                                                    <td>New York</td>
                                                                    <td>budhha</td>
                                                                    <td>2012/12/02</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Herrod Chandler</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>San Francisco</td>
                                                                    <td>kristen</td>
                                                                    <td>2012/08/06</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Rhona Davidson</td>
                                                                    <td>Integration Specialist</td>
                                                                    <td>Tokyo</td>
                                                                    <td>konghucu</td>
                                                                    <td>2010/10/14</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>Colleen Hurst</td>
                                                                    <td>Javascript Developer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>katolik</td>
                                                                    <td>2009/09/15</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>Sonya Frost</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>kristen</td>
                                                                    <td>2008/12/13</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>Jena Gaines</td>
                                                                    <td>Office Manager</td>
                                                                    <td>London</td>
                                                                    <td>kristen</td>
                                                                    <td>2008/12/19</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11</td>
                                                                    <td>Quinn Flynn</td>
                                                                    <td>Support Lead</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>kristen</td>
                                                                    <td>2013/03/03</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>12</td>
                                                                    <td>Charde Marshall</td>
                                                                    <td>Regional Director</td>
                                                                    <td>San Francisco</td>
                                                                    <td>kristen</td>
                                                                    <td>2008/10/16</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13</td>
                                                                    <td>Haley Kennedy</td>
                                                                    <td>Senior Marketing Designer</td>
                                                                    <td>London</td>
                                                                    <td>islam</td>
                                                                    <td>2012/12/18</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14</td>
                                                                    <td>Tatyana Fitzpatrick</td>
                                                                    <td>Regional Director</td>
                                                                    <td>London</td>
                                                                    <td>kristen</td>
                                                                    <td>2010/03/17</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15</td>
                                                                    <td>Michael Silva</td>
                                                                    <td>Marketing Designer</td>
                                                                    <td>London</td>
                                                                    <td>kristen</td>
                                                                    <td>2012/11/27</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16</td>
                                                                    <td>Paul Byrd</td>
                                                                    <td>Chief Financial Officer (CFO)</td>
                                                                    <td>New York</td>
                                                                    <td>kristen</td>
                                                                    <td>2010/06/09</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17</td>
                                                                    <td>Gloria Little</td>
                                                                    <td>Systems Administrator</td>
                                                                    <td>New York</td>
                                                                    <td>kristen</td>
                                                                    <td>2009/04/10</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>18</td>
                                                                    <td>Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>kristen</td>
                                                                    <td>2012/10/13</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>19</td>
                                                                    <td>Dai Rios</td>
                                                                    <td>Personnel Lead</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>kristen</td>
                                                                    <td>2012/09/26</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>20</td>
                                                                    <td>Jenette Caldwell</td>
                                                                    <td>Development Lead</td>
                                                                    <td>New York</td>
                                                                    <td>kristen</td>
                                                                    <td>2011/09/03</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> © Appzia.
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end d-none d-sm-block">
                                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>

                </div>

            </div>
            <!-- End Page-content -->



        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4 shadow">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>


    <!-- morris chart -->
    <script src="assets/libs/morris.js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <!-- jquery.vectormap map -->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="assets/js/pages/index.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>