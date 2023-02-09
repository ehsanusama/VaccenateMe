<?php  include ("login/register_user.php");

if(isset($_SESSION['em']  )){

?>
<?php     include ("include/display_parent.php");
    include("live_search.php");

    ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> Parent List</title>

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
                    <div class="col">
                        <h3 class="page-title">Parent List</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Parent List</li>
                        </ul>

                    </div>
                    <div class="top-nav-search">
                        <form method="post">
                            <input type="text" class="form-control" placeholder="Search here" name="search">
                            <button class="btn" type="submit" name="submitsearch"><i class="fa fa-search" ></i></button>

                        </form>
                    </div>

                </div>
            </div>
            <!-- /Page Header -->
            <!-- Page Header -->
            <div class="page-header">
                <div class="row" >
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive" >
                                    <table class="datatable table table-hover table-center mb-0" >
                                        <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>CNIC</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th >Actions</th>
                                        </tr>
                                        </thead >
                                        <?php if(isset($_REQUEST['submitsearch']))  {       ?>
                                        <tbody>
                                        <?php  search(); ?>
                                        </tbody>
                                        <?php }      ?>
                                        <tbody  class="table-data" >
                                        <?php displayparent();
                                        search();

                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
        </div>
    </div>
    <!-- /Page Wrapper -->

</div>
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
<script>
    $(document).ready(function(){
        $("#parentsearch").keyup(function (){
            var  search_term = $(this).val();

            $.ajax({
                url: "live_search.php",
                method: "POST",
                data: {search : search_term},
                success: function (data){
                    $("#table-data").html(data);
                }


            });
        });
    });
</script>
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:52 GMT -->
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




