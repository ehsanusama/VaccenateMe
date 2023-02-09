<?php


function displayparent(){
    $user=$_SESSION['id'];
    $status=$_SESSION['status'];

    include ("connection/conection.php");

    //admin display
    if($status==1){
        include ("connection/conection.php");

        $sql ="SELECT * FROM user ORDER BY u_id DESC ";
        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>

                <tr>
                    <td>
                        <h2 class="table-avatar">
                            <a href="profile.php?viewprofile=<?php  echo $data['u_id'] ;?>"><?php  echo $data['u_fname'] ;?>  <?php  echo $data['u_lname'] ;?></a>
                        </h2>
                    </td>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['u_cnic'] ;?> </a>
                        </h2>
                    </td>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['u_phone'] ;?> </a>
                        </h2>
                    </td>
                     <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['u_email'] ;?> </a>
                        </h2>
                    </td>
                    <td class="table-avatar">
                        <div class="actions">
                            <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['u_id']; ?>">
                                <i class="fe fe-trash"></i> Delete
                            </a>
                            <?php del_par(); ?>
                        </div>
                    </td>
                </tr>

                <?php


            }
        }

    }


}




function displayprofile(){

    include ("connection/conection.php");

    if (isset($_REQUEST['viewprofile'])) {

        $id = $_REQUEST['viewprofile'];
        include ("connection/conection.php");
        $sql ="SELECT * FROM user WHERE u_id='$id' ORDER BY u_id DESC ";

        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>


                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">

                                </div>
                                <div class="col ml-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0" style="text-transform: capitalize"><?php  echo $data['u_fname'] ;?> <?php  echo $data['u_lname'] ;?></h4>
                                    <h6 class="text-muted"><?php  echo $data['u_email'] ;?></h6>
                                    <h6 class="text-muted"><?php  echo $data['u_phone'] ;?></h6>
                                    <div class="user-Location"><i class="fa fa-map-marker"></i> Faisalabad, Pakistan</div>
                                        </div>

                <div class="col-auto profile-btn">
               <?php
                if($_SESSION['status']==0){  ?>
                    <a class="edit-link" data-toggle="modal" href="#edit_personal_details" ><i class="fa fa-edit mr-1"></i>Edit</a>
                <?php }

            ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content profile-tab-cont">

                            <!-- Personal Details Tab -->
                            <div class="tab-pane fade show active" id="per_details_tab">

                                <!-- Personal Details -->
                                <div class="row">
                                    <?php
                                    if($_SESSION['status']==1){  ?>
                                        <div class="col-lg-12">

                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Personal Details</span>
                                                </h5>
                                                <div class="table-responsive">
                                                    <table class="datatable table table-hover table-center mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th>Baby Name</th>
                                                            <th>Father Name</th>
                                                            <th>Gender</th>
                                                            <th>Date of Birth</th>
                                                            <th>City</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        </thead >
                                                        <tbody id="" >

                                                        <?php displaybaby_parent(); ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }

                                    ?>

                                        <!-- Edit Details Modal -->
                                        <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered" role="document" >
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Personal Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="row form-row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>First Name</label>
                                                                        <input type="text" class="form-control" value="<?php  echo $data['u_fname'] ;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Last Name</label>
                                                                        <input type="text"  class="form-control" value="<?php  echo $data['u_lname'] ;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>City</label>
                                                                        <input type="text" class="form-control" value="Miami">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <input type="text" class="form-control" value="Florida">
                                                                    </div>
                                                                </div>


                                                                <div class="col-12">
                                                                    <h5 class="form-title"><span>Address</span></h5>
                                                                </div>
                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Email ID</label>
                                                                        <input type="email" name="email_update" class="form-control" value="<?php  echo $data['u_email'] ;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Mobile</label>
                                                                        <input type="text" name="phone_update" value="<?php  echo $data['u_phone'] ;?>" class="form-control" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-block" name="update_details">Save Changes</button>
                                                        </form>
                                                        <?php  updateuser() ;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Edit Details Modal -->

                                    </div>


                                </div>
                                <!-- /Personal Details -->

                            </div>
                            <!-- /Personal Details Tab -->

                            <!-- Change Password Tab -->
                            <!-- /Change Password Tab -->

                        </div>
                    </div>
                </div>

                <?php


            }
        }


    }

}
?>

<?php
//====================== post delete function==================================
function del_par()
{
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['delete'];
        $q = "DELETE FROM user WHERE u_id='$id'";
        include ("connection/conection.php");
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Your Post", ",is Deleted!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="parent-list.php"; }, 3000);
            </script>
            <?php
        }
    }
}
//====================== post delete function end==================================
?>
<?php


function displaybaby_parent(){
    if (isset($_REQUEST['viewprofile'])) {
    $user=$_REQUEST['viewprofile'];
    include ("connection/conection.php");

    $sql ="SELECT * FROM baby  Where p_id=$user ORDER BY b_id DESC ";
    include ("connection/conection.php");
    $qrun = mysqli_query($conn, $sql);
      $er = mysqli_errno($conn);

    if(mysqli_num_rows($qrun) >0 ){

        while ($data = mysqli_fetch_array($qrun)){
            ?>

            <tr>

                <td>
                    <h2 class="table-avatar">
                        <a href="#"><?php  echo $data['b_fname'] ;?>  <?php  echo $data['b_lname'] ;?></a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <a href="#"><p style="text"> <?php  echo $data['bfather_name'] ;?> </a>
                    </h2>
                </td>
                <td>
                    <h2 class="table-avatar">
                        <a href="#"><p style="text"> <?php  echo $data['b_gender'] ;?> </a>
                    </h2>
                </td>

                <td><?php  echo $data['b_dob'] ;?> <span class="text-primary d-block"><?php  echo $data['b_tob'] ;?></span></td>


                <td>
                    <h2 class="table-avatar">
                        <a href="#"><p style="text"> <?php  echo $data['b_city'] ;?> </a>
                    </h2>
                </td>
                <?php
                if($data['status']==0){
                    ?>
                    <td class="text-left">
                        <span class="badge badge-pill bg-danger inv-badge"> Approval Pending</span>
                    </td>
                    <?php
                }
                if($data['status']==1){
                    ?>
                    <td class="text-left">
                        <span class="badge badge-pill bg-primary inv-badge">Approved</span>
                    </td>
                    <?php
                }
                if($data['status']==2){
                    ?>
                    <td class="text-left">
                        <span class="badge badge-pill bg-success inv-badge">Vaccinated</span>
                    </td>
                    <?php
                }?>


            </tr>

            <?php


        }
    }


}}
?>
<?php

function updateuser(){
if(isset($_REQUEST['update_details'])){
    $user=$_SESSION['id'];
    $email = $_REQUEST['email_update'];
    $phone = $_REQUEST['phone_update'];
    include ("connection/conection.php");
    $q="UPDATE user SET u_email='$email', u_phone='$phone' WHERE u_id='$user'";
    include ("connection/conection.php");
    $q_run= mysqli_query($conn,$q);
    if($q_run){
        ?>
        <script type="text/javascript">
            alert ("Changes Saved");
            setTimeout(function(){ window.location.href="index.php"; },200);
        </script>

        <?php
    }
}
}

?>

<?php

function displayuserprofile(){

    include ("connection/conection.php");


        $id = $_SESSION['id'];
        include ("connection/conection.php");
        $sql ="SELECT * FROM user WHERE u_id='$id' ORDER BY u_id DESC ";

        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>


                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">

                                </div>
                                <div class="col ml-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0" style="text-transform: capitalize"><?php  echo $data['u_fname'] ;?> <?php  echo $data['u_lname'] ;?></h4>
                                    <h6 class="text-muted"><?php  echo $data['u_email'] ;?></h6>
                                    <h6 class="text-muted"><?php  echo $data['u_phone'] ;?></h6>
                                    <div class="user-Location"><i class="fa fa-map-marker"></i> Faisalabad, Pakistan</div>
                                </div>

                                <div class="col-auto profile-btn">
                                    <?php
                                    if($_SESSION['status']==0){  ?>
                                        <a class="edit-link" data-toggle="modal" href="#edit_personal_details" ><i class="fa fa-edit mr-1"></i>Edit</a>
                                    <?php }

                                    ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content profile-tab-cont">

                            <!-- Personal Details Tab -->
                            <div class="tab-pane fade show active" id="per_details_tab">

                                <!-- Personal Details -->
                                <div class="row">
                                    <?php
                                    if($_SESSION['status']==1 || $_SESSION['status']==0 ){  ?>
                                        <div class="col-lg-12">

                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Personal Details</span>
                                                </h5>
                                                <div class="table-responsive">
                                                    <table class="datatable table table-hover table-center mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th>Baby Name</th>
                                                            <th>Father Name</th>
                                                            <th>Gender</th>
                                                            <th>Date of Birth</th>
                                                            <th>City</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        </thead >
                                                        <tbody id="" >

                                                        <?php displaybaby_user(); ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }

                                    ?>

                                    <!-- Edit Details Modal -->
                                    <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Personal Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" enctype="multipart/form-data">
                                                        <div class="row form-row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>First Name</label>
                                                                    <input type="text" class="form-control" value="<?php  echo $data['u_fname'] ;?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Last Name</label>
                                                                    <input type="text"  class="form-control" value="<?php  echo $data['u_lname'] ;?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control" value="Miami">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" class="form-control" value="Florida">
                                                                </div>
                                                            </div>


                                                            <div class="col-12">
                                                                <h5 class="form-title"><span>Address</span></h5>
                                                            </div>
                                                            <div class="col-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Email ID</label>
                                                                    <input type="email" name="email_update" class="form-control" value="<?php  echo $data['u_email'] ;?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Mobile</label>
                                                                    <input type="text" name="phone_update" value="<?php  echo $data['u_phone'] ;?>" class="form-control" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-block" name="update_details">Save Changes</button>
                                                    </form>
                                                    <?php  updateuser() ;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Edit Details Modal -->

                                </div>


                            </div>
                            <!-- /Personal Details -->

                        </div>
                        <!-- /Personal Details Tab -->

                        <!-- Change Password Tab -->
                        <!-- /Change Password Tab -->

                    </div>
                </div>
                </div>

                <?php


            }
        }




}
?>

<?php


function displaybaby_user(){

        $user= $_SESSION['id'];
        include ("connection/conection.php");

        $sql ="SELECT * FROM baby  Where p_id=$user ORDER BY b_id DESC ";
        include ("connection/conection.php");
        $qrun = mysqli_query($conn, $sql);
        $er = mysqli_errno($conn);

        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>

                <tr>

                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><?php  echo $data['b_fname'] ;?>  <?php  echo $data['b_lname'] ;?></a>
                        </h2>
                    </td>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['bfather_name'] ;?> </a>
                        </h2>
                    </td>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['b_gender'] ;?> </a>
                        </h2>
                    </td>

                    <td><?php  echo $data['b_dob'] ;?> <span class="text-primary d-block"><?php  echo $data['b_tob'] ;?></span></td>


                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['b_city'] ;?> </a>
                        </h2>
                    </td>
                    <?php
                    if($data['status']==0){
                        ?>
                        <td class="text-left">
                            <span class="badge badge-pill bg-danger inv-badge"> Approval Pending</span>
                        </td>
                        <?php
                    }
                    if($data['status']==1){
                        ?>
                        <td class="text-left">
                            <span class="badge badge-pill bg-primary inv-badge">Approved</span>
                        </td>
                        <?php
                    }
                    if($data['status']==2){
                        ?>
                        <td class="text-left">
                            <span class="badge badge-pill bg-success inv-badge">Vaccinated</span>
                        </td>
                        <?php
                    }?>


                </tr>

                <?php


            }
        }


    }
?>

