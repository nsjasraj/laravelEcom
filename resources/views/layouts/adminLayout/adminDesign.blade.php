<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../back2_assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="../back2_assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../back2_dist/css/style.min.css" rel="stylesheet">

    <link href="../back2_assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="../back2_assets/libs/jquery-steps/steps.css" rel="stylesheet">
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        @include('layouts.adminLayout.adminHeader')
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        @include('layouts.adminLayout.adminSidebar')
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
            @yield('content')   

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            @include('layouts.adminLayout.adminFooter')
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../back2_assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../back2_assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../back2_assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../back2_assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../back2_assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../back2_dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../back2_dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../back2_dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../back2_assets/libs/flot/excanvas.js"></script>
    <script src="../back2_assets/libs/flot/jquery.flot.js"></script>
    <script src="../back2_assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../back2_assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../back2_assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../back2_assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../back2_assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../back2_dist/js/pages/chart/chart-page-init.js"></script>

    <!-- this page js -->
    <script src="../back2_assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../back2_assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../back2_assets/libs/jquery-validation/dist/pwdChk.js"></script>    
</body>

</html>