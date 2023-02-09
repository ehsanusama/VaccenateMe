<?php  include ("login/register_user.php");

if(isset($_SESSION['id']  )){

?>

<?php  include "include/create_baby.php";?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title> Child List </title>
		
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
								<h3 class="page-title">Add a Child</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
									<li class="breadcrumb-item active">Add a Child</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">

										<div class="card-body">
											<form method="post" enctype="multipart/form-data">
												<h4 class="card-title">Child Information</h4>
												<div class="row">

													<div class="col-md-6">
														<div class="form-group">
															<label>First Name</label>
															<input type="text" class="form-control" name="b_fname">
														</div>
														<div class="form-group">
															<label>Father Name</label>
															<input type="text" class="form-control" name="bfather_name">
														</div>

                                                        <div class="form-group" >
                                                            <label class="d-block">Gender:</label>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="b_gender" id="gender_male" value="Male">
                                                                <label class="form-check-label" for="gender_male">Male</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="b_gender" id="gender_female" value="Female">
                                                                <label class="form-check-label" for="gender_female">Female</label>
                                                            </div>
                                                        </div>



													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label>Last Name</label>
															<input type="text" class="form-control" name="b_lname">
														</div>

														<div class="form-group">
															<label>Time of Birth</label>
															<input type="time" class="form-control" name="btob">
														</div>

                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <input type="date" class="form-control" name="bdob">
                                                        </div>

													</div>
												</div>
												<h4 class="card-title">Address</h4>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Address </label>
															<textarea name="b_adress" id="" cols="30" rows="10" class="form-control" ></textarea>
														</div>

													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>City</label>
															<input type="text" class="form-control" name="b_city">
														</div>


													</div>
												</div>
												<div class="text-right">
													<button type="submit"  name="b_submit" class="btn btn-primary">Submit</button>
												</div>

                                                <?php create_baby($_SESSION['id']);  ?>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
					</div>
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
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->
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