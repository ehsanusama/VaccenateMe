<?php

include ("connection/conection.php");

?>

<?php


  function displayappintment(){
      $user=$_SESSION['id'];
      $status=$_SESSION['status'];

      include ("connection/conection.php");

   $sql ="SELECT * FROM baby  Where p_id=$user ORDER BY b_id DESC ";
      include ("connection/conection.php");
   $qrun = mysqli_query($conn, $sql);

   if(mysqli_num_rows($qrun) >0 ){

      while ($data = mysqli_fetch_array($qrun)){
          ?>

          <tr>

              <td>
                  <h2 class="table-avatar">
                      <a href="vaccinetable.php?vactable=<?php  echo $data['vac_code'] ;?>"><?php  echo $data['b_fname'] ;?>  <?php  echo $data['b_lname'] ;?></a>
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
       }
          if($data['status']==3){
              ?>
              <td class="text-left">
                  <span class="badge badge-pill bg-danger inv-badge">Rejected</span>
              </td>
              <?php
          }
       ?>

              <td class="text-right">
                  <div class="actions">
                      <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['b_id']; ?>">
                          <i class="fe fe-trash"></i> Delete
                      </a>
                      <?php del_baby();  ?>

                      <?php
                      if($data['status']==3){
                          ?>
                          <a class="btn btn-sm bg-primary-light"  href="updatebaby.php?edit=<?php echo $data['b_id']; ?>" >
                              <i class="fe fe-edit"></i> Edit
                          </a>

                          <?php
                      }
                      ?>
                  </div>
              </td>

          </tr>

          <?php


      }
   }

      //admin display
              if($status==1){
                  include ("connection/conection.php");

                  $sql ="SELECT * FROM baby ORDER BY b_id DESC ";
                  $qrun = mysqli_query($conn, $sql);
                  if(mysqli_num_rows($qrun) >0 ){

                      while ($data = mysqli_fetch_array($qrun)){
                          ?>

                          <tr>
                              <td>
                                  <h2 class="table-avatar">
                                      <a href="vaccinetable.php?vactable=<?php  echo $data['vac_code'] ;?>"><?php  echo $data['b_fname'] ;?>  <?php  echo $data['b_lname'] ;?></a>
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
                }
                             if($data['status']==3){
                                 ?>
                                 <td class="text-left">
                                     <span class="badge badge-pill bg-danger inv-badge">Rejected</span>
                                 </td>
                                 <?php
                             }

                ?>

                              <td class="text-right">
                                  <div class="actions">
                                      <?php if($data['status']==0 || $data['status']==3 ){ ?>

                                      <a class="btn btn-sm bg-success-light" data-toggle="" href="?approve=<?php echo $data['b_id']; ?>">
                                          <i class="fe fe-check"></i> Approve
                                      </a>
                                          <?php approve(); ?>
                                          <a class="btn btn-sm bg-danger-light" data-toggle="" href="?reject=<?php echo $data['b_id']; ?>">
                                              <i class="fe fe-check"></i> Reject
                                          </a>
                                       <?php  }?>
                                      <?php reject();
                                      
                                      ?>

                          <?php if($data['status']==1){ ?>
                                      <a class="btn btn-sm bg-primary-light" data-toggle="" href="?vaccinated=<?php echo $data['b_id']; ?>">
                                          <i class="fe fe-check"></i> Vaccinated
                                      </a>
                          <?php  }?>
                                      <?php vaccinated();
                                      vaccinatedmail();
                                      ?>
                                      <a class="btn btn-sm bg-danger-light" data-toggle="" href="?delete=<?php echo $data['b_id']; ?>">
                                          <i class="fe fe-trash"></i> Delete
                                      </a>
                                      <?php del_baby();  ?>
                                  </div>
                              </td>
                          </tr>

                          <?php


                      }
                  }

                    }
  }
?>
<?php
//====================== post delete function==================================
function del_baby()
{
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['delete'];
        $q = "DELETE FROM baby WHERE b_id='$id'";
        include ("connection/conection.php");
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Your Post", ",is Deleted!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="baby-list.php"; }, 2000);
            </script>
            <?php
        }
    }
}
//====================== post delete function end==================================
?>

<?php
function approve()
{
    if (isset($_REQUEST['approve'])) {
        $id = $_REQUEST['approve'];
        $s=1;
        include ("connection/conection.php");
        $q = "UPDATE baby SET status='$s' WHERE b_id='$id'";
        include ("connection/conection.php");
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Baby", ",is Approved!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="baby-list.php"; }, 2000);
            </script>
            <?php
        }
    }


}
?>

<?php
function reject()
{
    if (isset($_REQUEST['reject'])) {
        $id = $_REQUEST['reject'];
        $s=3;
        include ("connection/conection.php");
        $q = "UPDATE baby SET status='$s' WHERE b_id='$id'";
        include ("connection/conection.php");
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Baby", ",is Rejected!", "success");
            </script>
            <script>
                setTimeout(function(){ window.location.href="baby-list.php"; }, 2000);
            </script>
            <?php
        }
    }


}
?>
<?php
function vaccinated()
{
    if (isset($_REQUEST['vaccinated'])) {
        $id = $_REQUEST['vaccinated'];
        $s=2;
        include ("connection/conection.php");
        $q = "UPDATE baby SET status='$s' WHERE b_id='$id'";
        include ("connection/conection.php");
        $q_run=mysqli_query($conn, $q);
        if($q_run){
            ?>
            <script type="text/javascript">
                swal("Baby", ",Vaccinated!", "success");
            </script>
<!--            <script>-->
<!--                setTimeout(function(){ window.location.href="baby-list.php"; }, 2000);-->
<!--            </script>-->
            <?php
        }
    }


}
?>


<?php
function vaccinatedmail()
{
    if (isset($_REQUEST['vaccinated'])) {
        $id = $_REQUEST['vaccinated'];
        include ("connection/conection.php");
        $sql ="SELECT * FROM baby WHERE b_id ='$id'";
        $qrun = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($qrun);
        $parent =  $data['p_id'];
        echo $parent;
        $usql ="SELECT * FROM user WHERE u_id ='$parent'";
        include ("connection/conection.php");
        $uqrun = mysqli_query($conn, $usql);
        if(mysqli_num_rows($uqrun) >0 ){
            while ($row = mysqli_fetch_array($uqrun)){
                $name =$row['u_fname'];
                $to = $row['u_email'];
                $from ='admin@vaccinateme.online';
                $fromName = 'VaccinateMe';
                $mainmessage = 'Message';
                $subject = "Email from VaccinateMe";
                $htmlContent =' 
                <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #dae7ff; border-radius: 10px;">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #dae7ff">
       <span style="font-size:37px; font-weight:bold">Certificate of Completion of Vaccination</span>
       <br><br>
       <span style="font-size:20px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b></b></span><br/><br/>
       <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
       <span style="font-size:30px">$course.getName()</span> <br/><br/>
       <span style="font-size:20px">with score of <b>$grade.getPoints()%</b></span> <br/><br/><br/><br/>
       <span style="font-size:25px"><i>dated</i></span><br>
      #set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), "MMMM dd, yyyy"))
      <span style="font-size:30px">$dt</span>
      <br>
      <div class="logo align-items-center"><br><br>
     <a href="https://vaccinateme.online/"><img src="img/vaccinatemelogo.png" style="width: 200px"></a>

</div>
</div>
</div>
    ';
// Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
                $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
                /*
                $headers .= 'Cc: welcome@example.com' . "\r\n";
                $headers .= 'Bcc: welcome2@example.com' . "\r\n";
                 */
// Send email
                if(mail($to, $subject, $htmlContent, $headers)){
                    echo 'Email has sent successfully.';
                }else{
                    echo 'Email sending failed.';
                }

            }


        }


    }

}
?>

<?php

    if (isset($_REQUEST['reject'])) {
        $id = $_REQUEST['reject'];
        include ("connection/conection.php");
        $sql ="SELECT * FROM baby WHERE b_id ='$id'";
        $qrun = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($qrun);
        $parent =  $data['p_id'];
        echo $parent;
        $usql ="SELECT * FROM user WHERE u_id ='$parent'";
        include ("connection/conection.php");
        $uqrun = mysqli_query($conn, $usql);
        if(mysqli_num_rows($uqrun) >0 ){
            while ($row = mysqli_fetch_array($uqrun)){
                $name =$row['u_fname'];
                $to = $row['u_email'];
                $from ='admin@vaccinateme.online';
                $fromName = 'VaccinateMe';
                $mainmessage = 'Message';
                $subject = "Email from VaccinateMe";
                $htmlContent ="Your Application is rejected";
// Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
                $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
                /*
                $headers .= 'Cc: welcome@example.com' . "\r\n";
                $headers .= 'Bcc: welcome2@example.com' . "\r\n";
                 */
// Send email
                if(mail($to, $subject, $htmlContent, $headers)){
                    echo 'Email has sent successfully.';
                }else{
                    echo 'Email sending failed.';
                }

            }


        }






}
?>

<?php
//==================================update post function=======================================
function update_baby()
{
    if(isset($_REQUEST['edit'])){
        $id = $_REQUEST['edit'];
        if(isset($_REQUEST['update_baby'])){
            $fname = ucwords($_REQUEST['b_fname']);
            $lname = ucwords($_REQUEST['b_lname']);
            $fathername=  $_REQUEST['bfather_name'];
             $gender= $_REQUEST['gender'];
            $date = $_REQUEST['bdob'];
            $time = $_REQUEST['btob'];
            include ("connection/conection.php");
            $q="UPDATE baby SET b_fname='$fname',b_lname='$lname',bfather_name='$fathername',b_gender='$gender',b_dob='$date' ,b_tob='$time'  WHERE b_id='$id'";
            $q_run= mysqli_query($conn,$q);
            $er = mysqli_errno($conn);
            echo $er;
            if($q_run){
                ?>


                <script type="text/javascript">
                    swal("Baby", ",is Update!", "success");
                </script>
                <script>
                    setTimeout(function(){ window.location.href="baby-list.php"; }, 2000);
                </script>
                <?php
            }
        }
    }

}

//==================================update post function end=======================================
?>