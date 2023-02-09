<?php  include ("login/register_user.php");

if(isset($_SESSION['em']  )){

?>


    <?php     include ("include/display_vaccine.php");?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title> Dashboard </title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">

        <!-- Datatables CSS -->
        <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/swl.js"></script>
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <?php  include ("include/section/header.php"); ?>
        <!-- /Header -->


        <!-- Sidebar -->
        <?php  include ("include/section/sidebar.php"); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title" style="text-transform: capitalize">Welcome  <?php echo $_SESSION['name']; ?> </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="page-header">
                    <div class="row" >
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="datatable table table-hover table-center mb-0">
                                            <h2>All Announcement</h2>
                                            <thead>
                                            <tr>

                                                <th>Vaccine Name</th>
                                                <th>Age</th>
                                                <th>Category</th>
                                                <th>Time Period</th>
                                                <th>Date</th>
                                                <?php if($_SESSION['status']==1){ ?>
                                                    <th class="text-center">Actions</th>
                                                <?php } ?>
                                            </tr>
                                            </thead >
                                            <tbody id="" >

                                            <?php displayvaccine();?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /Page Wrapper -->


    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <!-- Custom JS -->
    <script  src="assets/js/script.js"></script>

    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>

<?php }
else{
    echo "please login first";

    ?>

    <script type="text/javascript">
        setTimeout(function(){ window.location.href="login/login.php"; }, 2000);
    </script>
    <?php
}



?>