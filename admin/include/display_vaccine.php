<?php


function displayvaccine(){
    $user=$_SESSION['id'];
    $status=$_SESSION['status'];

    include ("connection/conection.php");

    //admin display

        include ("connection/conection.php");

        $sql ="SELECT * FROM announcement ORDER BY v_id DESC ";
        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>

                <tr>

                    <td>
                        <h2 class="table-avatar">
                            <a href="single_vaccine_post.php?viewvaccine=<?php  echo $data['v_id'] ;?>"><?php  echo $data['v_name'] ;?></a>
                        </h2>
                    </td>

                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['v_age'] ;?> </a>
                        </h2>
                    </td>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['v_cat'] ;?> </a>
                        </h2>
                    </td>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['v_time'] ;?> </a>
                        </h2>
                    </td>
                    <td>
                        <h2 class="table-avatar">
                            <a href="#"><p style="text"> <?php  echo $data['v_date'] ;?> </a>
                        </h2>
                    </td>

                    <td class="text-right">
                <?php if($_SESSION['status']==1){ ?>
                        <div class="actions">
                            <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['v_id']; ?>">
                                <i class="fe fe-trash"></i> Delete
                            </a>
                            <?php del_vac();  ?>
                        </div>
                    <?php } ?>
                    </td>
                    </tr>



                <?php


            }
        }




}






function displaysinglevaccine(){

    include ("connection/conection.php");

if (isset($_REQUEST['viewvaccine'])) {

    $id = $_REQUEST['viewvaccine'];
    include ("connection/conection.php");
    $sql ="SELECT * FROM announcement WHERE v_id='$id' ORDER BY v_id DESC ";

    $qrun = mysqli_query($conn, $sql);
    if(mysqli_num_rows($qrun) >0 ){

        while ($data = mysqli_fetch_array($qrun)){
            ?>


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between">
                            <span>Vaccination Details</span>
                        </h5>

                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Vaccine Name</p>
                            <p class="col-sm-10"><?php  echo $data['v_name'] ;?></p>
                        </div>
                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Category</p>
                            <p class="col-sm-10"><?php  echo $data['v_cat'] ;?></p>
                        </div>
                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Age</p>
                            <p class="col-sm-10"><?php  echo $data['v_age'] ;?></p>
                        </div>
                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Time Period</p>
                            <p class="col-sm-10"><?php  echo $data['v_time'] ;?></p>
                        </div>

                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0">Description</p>
                            <p class="col-sm-10 mb-0"><?php  echo $data['v_dec'] ;?></p>
                        </div>
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
function del_vac()
{
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['delete'];
        $q = "DELETE FROM announcement WHERE v_id='$id'";
        include ("connection/conection.php");
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Your Post", ",is Deleted!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="index.php"; }, 3000);
            </script>
            <?php
        }
    }
}
//====================== post delete function end==================================
?>


