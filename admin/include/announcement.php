<?php

include ("connection/conection.php");

?>


<?php
//==================================create user function=======================================
function create_vaccine(){
    include ("connection/conection.php");
    date_default_timezone_set("Asia/Karachi");
    $date_time= date("d-m-Y")."  ".date("h:i-a") ;
    if(isset($_REQUEST['annc_send'])){
        $vname = $_REQUEST['v_name'];
        $vage=  $_REQUEST['v_age'];
        $vcat=  $_REQUEST['v_cat'];
        $vtime=  $_REQUEST['v_time'];
        $vdec=  $_REQUEST['v_dec'];
        $date = $date_time;
        include ("connection/conection.php");
            if($vname!="" && $vage!="" && $vcat!="" && $vtime!="" && $vdec!="" ){
                        $q = "INSERT INTO announcement (v_name,v_age, v_cat,v_time,v_dec,v_date)
                                 VALUES('$vname','$vage','$vcat','$vtime','$vdec','$date_time')";
                        $q_run= mysqli_query($conn,$q);
                        $error= mysqli_error($conn);
                        echo $error;
                        if($q_run) {

                            ?>
                            <script type="text/javascript">
                                swal("Success!", ", Your Vaccination Registered!", "success");
                                setTimeout(function(){ window.location.href="announcement.php"; }, 3000);
                            </script>                            <?php
                        }
                }



            //if not empty
            else{
                ?>
                <script type="text/javascript">
                    swal("Attention!", ", Don't Leave any Field Empty!", "error");
                    setTimeout(function(){ window.location.href="announcement.php"; }, 4000);
                </script>
                <?php
            }
        }

    //if isset
}
//==================================create user function end====================================
?>