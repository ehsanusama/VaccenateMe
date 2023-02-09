<?php

include ("connection/conection.php");

?>


<?php
//==================================create user function=======================================
function create_baby($id){
    include ("connection/conection.php");

    if(isset($_REQUEST['b_submit'])){
        $fname = ucwords($_REQUEST['b_fname']);
        $lname = ucwords($_REQUEST['b_lname']);
        $fathername=  $_REQUEST['bfather_name'];
        $gender= $_REQUEST['b_gender'];
        $dec= $_REQUEST['b_adress'];
        $date = $_REQUEST['bdob'];
        $time = $_REQUEST['btob'];
        $city = $_REQUEST['b_city'];
        $code= rand(10,10000);
        $vac_code= "VAC-".$code;
        include ("connection/conection.php");
            if($fname!="" && $lname!="" && $fathername!="" && $gender!="" && $date!="" && $time!="" && $dec!="" && $city!=""){
                        $q = "INSERT INTO baby (b_fname,b_lname, bfather_name,b_gender,b_dob,b_tob,b_city,p_id,b_adress,vac_code)
                                 VALUES('$fname','$lname','$fathername','$gender','$date','$time','$city','$id','$dec','$vac_code')";
                        $q_run= mysqli_query($conn,$q);
                        $error= mysqli_error($conn);
                        echo $error;
                        if($q_run) {
                            $baby_id ="SELECT * FROM baby ";


                   $vac = "INSERT INTO vaccine (vac_id,v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,v11,v12,v13,v14,v15)
                                        VALUES('$vac_code',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
                    $sql= mysqli_query($conn,$vac);
                   if($sql){
                       echo "add";
                   }
                            ?>
                            <script type="text/javascript">
                                swal("Success!", ", Your Child Is Registered!", "success");
                                setTimeout(function(){ window.location.href="appointment-list.php"; }, 3000);
                            </script>                            <?php
                        }
                }



            //if not empty
            else{
                ?>
                <script type="text/javascript">
                    swal("Attention!", ", Don't Leave any Field Empty!", "error");
                    setTimeout(function(){ window.location.href="docs_user.php"; }, 4000);
                </script>
                <?php
            }
        }

    //if isset
}
//==================================create user function end====================================
?>



