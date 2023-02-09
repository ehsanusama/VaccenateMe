

<?php
session_start();
function login(){
    if(isset($_POST['login'])){
        include ("../connection/conection.php");
        $email= $_POST['cnic'];
        $pass= $_POST['pass'];
        if($email!="" && $pass!="")
        { //if  not empty check
            include ("../connection/conection.php");
            $q = "Select * From user WHERE u_cnic='$email' and u_pass='$pass' ";

            $q_run = mysqli_query($conn,$q);
            $data = mysqli_fetch_array($q_run);
            if (mysqli_num_rows($q_run)>0)
            {
                if($data['u_cnic']==$email && $data['u_pass']==$pass){
                    $_SESSION['id'] = $data['u_id'];
                    $_SESSION['name'] = $data['u_fname'];
                    $_SESSION['em']=$data['u_email'];
                    $_SESSION['status']=$data['u_status'];
                    ?>

                    <script>
                        setTimeout(function(){ window.location.href="../index.php"; }, 1000);
                    </script>
                    <?php

                } else
                {

                    echo "Error! Please Login First Or Enter Correct Email Or Password";
                    ?>
                        <script>
                            setTimeout(function(){ window.location="login.php"; }, 3000);
                        </script>
                    <?php
                }

            }
            else
            {
                echo "Error! Please Login First Or Enter Correct Email Or Password";
                ?>

                <script>
                    setTimeout(function(){ window.location="login.php"; }, 2000);
                </script>


                <?php
            }
        }
        else
        {
            ?>
            <div class="card-panel red">
                <p class="white-text"><strong class="white-text">Attention!</strong>Don't leave any Field Empty</p>
            </div>
            <script>
                setTimeout(function(){ window.location.href="login.php"; }, 4000);
            </script>
            <?php
        }

    }

}


//sign up



function signup_user(){
    $date_time= date("Y-m-d") ;
    if(isset($_REQUEST['signup_user'])){
        $fname = $_REQUEST['u_fname'];
        $lname = $_REQUEST['u_lname'];
        $cnic = $_REQUEST['u_cnic'];
        $email= $_REQUEST['u_email'];
        $phone= $_REQUEST['u_phone'];
        $password= $_REQUEST['u_pass'];
       // $status=1;
       // $date=$date_time;

        include ("../connection/conection.php");
        $qa="SELECT * FROM user  WHERE u_cnic='$cnic'";
        $query_run = mysqli_query($conn, $qa);
        if(!(mysqli_num_rows($query_run)>0)){
            include ("../connection/conection.php");
        if($fname!="" && $lname!="" && $cnic!="" && $email!="" && $phone!="" && $password!="" ){
            $con = mysqli_connect("localhost","root","","vms");
                $q = "INSERT INTO user (u_fname,u_lname,u_cnic, u_email,u_phone,u_pass)
                                 VALUES('$fname','$lname','$cnic','$email','$phone','$password')";
            include ("../connection/conection.php");
                $q_run= mysqli_query($conn,$q);
                $error= mysqli_error($conn);
                echo $error;
                if($q_run) {


                    ?>
                    <script type="text/javascript">
                        swal("Success", "User Register", "success");
                    </script>
                    <script>
                        setTimeout(function(){ window.location.href="login.php"; }, 1000);
                    </script>
                    <?php
                }
        }//if not empty
        else{
            ?>
            <script type="text/javascript">
                swal("Attention!", ", Don't Leave any Field Empty!", "error");
            </script>
            <script>
                setTimeout(function(){ window.location.href="register.php"; }, 2000);
            </script>
            <?php
        }
        }

        else{
            ?>
            <script type="text/javascript">
                swal("Attention!", "User Already Existed!", "error");
                setTimeout(function(){ window.location.href="register.php"; }, 3000);
            </script>
            <?php

        }
    //if isset
}}
