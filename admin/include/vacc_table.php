
<?php


function displaybaby_vaccine(){
    if (isset($_REQUEST['vactable'])) {
        $user=$_REQUEST['vactable'];
        include ("connection/conection.php");

        $sql ="SELECT * FROM vaccine  Where vac_id='$user' ";
        include ("connection/conection.php");
        $qrun = mysqli_query($conn, $sql);
        $er = mysqli_errno($conn);

        if(mysqli_num_rows($qrun) >0 ){

            while ($data = mysqli_fetch_array($qrun)){
                ?>
                <div class="card">
                    <div class="card-body">
                        <h5>

                        </h5>
                        <div class="table-responsive">
                            <table class="datatable table table-hover table-center mb-0">
                                <thead>
                                <tr>
                                    <th>Age</th>
                                    <th>Vaccine</th>
                                    <th>Protection Against Disease</th>
                                    <th>Causative agent</th>
                                    <th>Status</th>
                                </tr>
                                </thead >
                                <tbody id="" >
                                <tr>
                                    <td rowspan="2">At birth</td>
                                    <td>BCG</td>
                                    <td>ChildhoodTB</td>
                                    <td>Bacteria</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v1']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v1']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v1']==0 && $_SESSION['status']==1    ){    ?>
                                            <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine1=<?php echo $data['vac_id']; ?>">
                                                <i class="fe fe-check"></i> Vaccinated
                                                        </a>
                                             <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>OPV-O</td>
                                    <td>Poliomyelitis</td>
                                    <td>Virus</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v2']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v2']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v2']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine2=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td rowspan="4">6 Weeks old</td>
                                    <td>Pentavalent 1</td>
                                    <td>Diphtheria, pertussis, tetanus, hepatitis B</td>
                                    <td>Bacteria</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v3']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v3']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v3']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine3=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>OPV 1</td>
                                    <td>Poliomyelitis</td>
                                    <td>Virus</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v4']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v4']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v4']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine4=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Rota 1</td>
                                    <td>Rotavirus</td>
                                    <td>Virus</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v5']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v5']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v5']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine5=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Pneumococcal 1</td>
                                    <td>Hib pneumonia and meningitis</td>
                                    <td>Bacteria</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v6']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v6']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v6']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine6=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td rowspan="4">10 week old</td>
                                    <td>Pentavalent 2</td>
                                    <td>Diphtheria, pertussis, tetanus, hepatitis B</td>
                                    <td>Bacteria</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v7']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v7']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v7']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine7=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>OPV 2</td>
                                    <td>Poliomyelitis</td>
                                    <td>Virus</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v8']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v8']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v8']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine8=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>Rota 2</td>
                                    <td>Rotavirus</td>
                                    <td>Virus</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v9']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v9']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v9']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine9=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>Pneumococcal 2</td>
                                    <td>Hib pneumonia and meningitis</td>
                                    <td>Bacteria</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v10']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v10']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v10']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine10=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td rowspan="3">14 week old</td>
                                    <td>OPV 3 IPV</td>
                                    <td>Poliomyelitis</td>
                                    <td>Virus</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v11']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v11']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v11']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine11=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>Pentavalent 3</td>
                                    <td>Diphtheria, pertussis, tetanus, hepatitis B</td>
                                    <td>Bacteria</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v12']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v12']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v12']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine12=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>Pneumococcal 2</td>
                                    <td>Hib pneumonia and meningitis</td>
                                    <td>Bacteria</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v13']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v13']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v13']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine13=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>9 months old</td>
                                    <td>Measles 1</td>
                                    <td>Measles</td>
                                    <td>Virus</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v14']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v14']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v14']==0 && $_SESSION['status']==1    ){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine14=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>15 month old</td>
                                    <td>Measles 2</td>
                                    <td>Measles</td>
                                    <td>Virus</td>
                                    <td class="text-left">
                                        <div class="actions">

                                            <?php if($data['v15']==0){    ?>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Pending
                                                </a>
                                            <?php } ?>
                                            <?php if($data['v15']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="">
                                                    <i class="fe fe-"></i> Vaccinated
                                                </a>
                                            <?php } ?>

                                            <?php if($data['v15']==0 && $_SESSION['status']==1){    ?>
                                                <a class="btn btn-sm bg-success-light" data-toggle="" href="vaccinetable.php?vaccine15=<?php echo $data['vac_id']; ?>">
                                                    <i class="fe fe-check"></i> Vaccinated
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php


            }
        }


    }}
?>
<?php
    if (isset($_REQUEST['vaccine1'])) {
        $id = $_REQUEST['vaccine1'];
        $s=1;

      include ("connection/conection.php");
       $q = "UPDATE vaccine SET v1 ='$s' WHERE vac_id='$id'";
        include ("connection/conection.php");
        $q_run=mysqli_query($conn, $q);
        $er = mysqli_errno($conn);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Baby", ",Vaccinated!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
            </script>
            <?php
        }
    }
    if (isset($_REQUEST['vaccine2'])) {
    $id = $_REQUEST['vaccine2'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v2 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
    if (isset($_REQUEST['vaccine3'])) {
    $id = $_REQUEST['vaccine3'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v3 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine4'])) {
    $id = $_REQUEST['vaccine4'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v4 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine5'])) {
    $id = $_REQUEST['vaccine5'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v5 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine6'])) {
    $id = $_REQUEST['vaccine6'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v6 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine7'])) {
    $id = $_REQUEST['vaccine7'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v7 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine8'])) {
    $id = $_REQUEST['vaccine8'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v8 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine9'])) {
    $id = $_REQUEST['vaccine9'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v9 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine10'])) {
    $id = $_REQUEST['vaccine10'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v10 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine11'])) {
    $id = $_REQUEST['vaccine11'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v11 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine12'])) {
    $id = $_REQUEST['vaccine12'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v12 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine13'])) {
    $id = $_REQUEST['vaccine13'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v13 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine14'])) {
    $id = $_REQUEST['vaccine14'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v14 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}
if (isset($_REQUEST['vaccine15'])) {
    $id = $_REQUEST['vaccine15'];
    $s=1;

    include ("connection/conection.php");
    $q = "UPDATE vaccine SET v15 ='$s' WHERE vac_id='$id'";
    include ("connection/conection.php");
    $q_run=mysqli_query($conn, $q);
    $er = mysqli_errno($conn);
    if($q_run){
        ?>
        <script type="text/javascript">
            swal("Baby", ",Vaccinated!", "success");
        </script>
        <script>
            setTimeout(function(){ window.location.href="vaccinetable.php?vactable=<?php echo $id; ?> "; }, 2000);
        </script>
        <?php
    }
}



?>

