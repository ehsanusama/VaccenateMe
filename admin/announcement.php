<?php  include ("login/register_user.php");

if(isset($_SESSION['id']  )){

    ?>

    <?php  include "include/announcement.php";?>

    <!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Announcement </title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="assets/css/select2.min.css">

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
                            <h3 class="page-title">Announcement Form</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#l">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Announcement</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vaccination Alert!</h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Vacc Name</label>
                                                <input type="text" class="form-control" name="v_name">
                                            </div>
                                            <div class="form-group">
                                                <label>Vaccination Time Period</label>
                                                <select class="select" name="v_time">
                                                    <option>Select</option>
                                                    <option value="1-2 Week">1-2 Week</option>
                                                    <option value="2-3 Week">2-3 Week</option>
                                                    <option value="3-4 Week">3-4 Week</option>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <select class="select" name="v_age">
                                                    <option>Select</option>
                                                    <option value="0-3 Months">0-3 Months</option>
                                                    <option value="3-6 Months">3-6 Months</option>
                                                    <option value="6-9 Months">6-9 Months</option>
                                                    <option value="9-12 Months">9-12 Months</option>
                                                    <option value="1+ Year">1+ Year</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Vaccination Category</label>
                                                <select class="select" name="v_cat">
                                                    <option>Select</option>
                                                    <option value="Polio(IPV)">Polio(IPV)</option>
                                                    <option value="Chickenpox">Chickenpox</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Vaccination Description</label>
                                                <textarea name="v_dec" id="" cols="" rows="5" type="text" class="form-control" ></textarea>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary" name="annc_send">Submit</button>
                                    </div>
                                </form>
                           <?php create_vaccine(); ?>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>


    <?php //if "email" variable is filled out, send email

    if (isset($_REQUEST['annc_send']))
    {      //Email information
        include ("connection/conection.php");
                      $acc = $_REQUEST['v_dec'];

        $sql ="SELECT * FROM user ";

        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){
            while ($data = mysqli_fetch_array($qrun)){
                    $name =$data['u_fname'];
                $to = $data['u_email'].",";
                $from ='admin@vaccinateme.online';
                $fromName = 'VaccinateMe';
                $mainmessage = 'Message';
                $subject = "Email from VaccinateMe";
                $htmlContent =' 
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <title>VaccinateMe</title>
</head>
<body>
<table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;max-width:600px" align="center">
    <tbody><tr>
        <td role="modules-container" style="padding:0px 0px 0px 0px;color:#000000;text-align:left" bgcolor="#FFFFFF" width="100%" align="left"><table class="m_-5950082754398973914preheader" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="display:none!important;opacity:0;color:transparent;height:0;width:0">
            <tbody><tr>
                <td role="module-content">
                    <p></p>
                </td>
            </tr>
            </tbody></table><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" style="padding:30px 20px 30px 20px" bgcolor="#f6f6f6">
            <tbody>
            <tr role="module-content">
                <td height="100%" valign="top">
                    <table class="m_-5950082754398973914column" width="540" style="width:540px;border-spacing:0;border-collapse:collapse;margin:0px 10px 0px 10px" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="">
                        <tbody>
                        <tr>
                            <td style="padding:0px;margin:0px;border-spacing:0"><table class="m_-5950082754398973914wrapper" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="font-size:6px;line-height:10px;padding:0px 0px 0px 0px" valign="top" align="center">
                                        <img class="m_-5950082754398973914max-width CToWUd" border="0" style="display:block;color:#000000;text-decoration:none;font-family:Helvetica,arial,sans-serif;font-size:16px" width="auto" alt="" src="assets/img/vaccinatemelogo.png" height="50">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 20px 0px" role="module-content" bgcolor="">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table class="m_-5950082754398973914wrapper" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="font-size:6px;line-height:10px;padding:0px 0px 0px 0px" valign="top" align="center">

                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 30px 0px" role="module-content" bgcolor="">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:50px 30px 18px 30px;line-height:36px;text-align:inherit;background-color:#ffffff" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="font-size:43px">Vaccination Alert!  , '. $name .'&nbsp;</span></div><div></div></div></td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:18px 30px 18px 30px;line-height:22px;text-align:inherit;background-color:#ffffff" height="100%" valign="top" bgcolor="#ffffff" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="font-size:15px">'. $acc .'</span><br>.</span></div>
                                        <div style="font-family:inherit;text-align:center"><span style="color:#ffbe00;font-size:18px"><strong>Thank you!&nbsp;</strong></span></div><div></div></div></td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 20px 0px" role="module-content" bgcolor="#ffffff">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                <tbody>
                                <tr>
                                    <td align="center" bgcolor="#ffffff" style="padding:0px 0px 0px 0px">
                                        <table border="0" cellpadding="0" cellspacing="0" class="m_-5950082754398973914wrapper-mobile" style="text-align:center">
                                            <tbody>
                                            <tr>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 50px 0px" role="module-content" bgcolor="#ffffff">
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:50px 30px 50px 30px;line-height:22px;text-align:inherit;background-color:#00d0f1" height="100%" valign="top" bgcolor="#6e6e6e" role="module-content"><div><div style="font-family:inherit;text-align:center"><span style="color:#ffffff;font-size:18px"><strong>What You Can Do on VaccinateME</strong></span></div>
                                        <div style="font-family:inherit;text-align:center"><br></div>
                                        <div style="font-family:inherit;text-align:center"><span style="color:#ffffff;font-size:18px">Parents can Register Children.</span></div>
                                        <div style="font-family:inherit;text-align:center"><br></div>
                                        <div style="font-family:inherit;text-align:center"><span style="color:#ffffff;font-size:18px">Parents Can Receive Alerts Of Vaccinations </span></div>
                                        <div style="font-family:inherit;text-align:center"><br></div>
                                        <div style="font-family:inherit;text-align:center"><span style="color:#ffbe00;font-size:18px"><strong>+ much more!</strong></span></div>
                                        <div style="font-family:inherit;text-align:center"><br></div>
                                        <div style="font-family:inherit;text-align:center"><span style="color:#ffffff;font-size:18px">Need support? Our support team is always</span></div>
                                        <div style="font-family:inherit;text-align:center"><span style="color:#ffffff;font-size:18px">ready to help!&nbsp;</span></div><div></div></div></td>
                                </tr>
                                </tbody>
                            </table><table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                <tbody>
                                <tr>
                                    <td align="center" bgcolor="00d0f1" style="padding:0px 0px 0px 0px">
                                        <table border="0" cellpadding="0" cellspacing="0" class="m_-5950082754398973914wrapper-mobile" style="text-align:center">
                                            <tbody>
                                            <tr>
                                                <td align="center" bgcolor="00d0f1" style="background: #00d0f1;border-radius:6px;font-size:16px;text-align:center">
                                                    <a href="https://vaccinateme.online/" style="background-color:#ffbe00;border:1px solid #ffbe00;border-color:#ffbe00;border-radius:0px;border-width:1px;color:#000000;display:inline-block;font-size:14px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:12px 40px 12px 40px;text-align:center;text-decoration:none;border-style:solid;font-family:inherit">Contact Support</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table><table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                <tbody>
                                <tr>
                                    <td style="padding:0px 0px 30px 0px" role="module-content" bgcolor="00d0f1">
                                    </td>
                                </tr>
                                </tbody>
                            </table></td>
                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            </tbody>
        </table>

        </td></tr></tbody><tbody>
<tr>
    <td align="center" bgcolor="" style="padding:0px 0px 20px 0px">
        <table border="0" cellpadding="0" cellspacing="0" class="m_-5950082754398973914wrapper-mobile" style="text-align:center">
            <tbody>
            <tr>
                <td align="center" bgcolor="#f5f8fd" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit"><a style="background-color:#f5f8fd;border:1px solid #f5f8fd;border-color:#f5f8fd;border-radius:25px;border-width:1px;color:#a8b9d5;display:inline-block;font-size:10px;font-weight:normal;letter-spacing:0px;line-height:normal;padding:5px 18px 5px 18px;text-align:center;text-decoration:none;border-style:solid;font-family:helvetica,sans-serif">♥ POWERED BY VaccinateME</a></td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>
</body>
</html>
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
    if (isset($_REQUEST['annc_send']))
    {      //Email information
        include ("connection/conection.php");
           $acc = $_REQUEST['v_dec'];
        $sql ="SELECT * FROM user ";

        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){
            while ($data = mysqli_fetch_array($qrun)){

                require_once '..\twilio-php-main\src\Twilio\autoload.php';

                $sid = "AC487ebe553adff73b0bd3f56970e0c827";
                $token = "f74c3f928528ecd627e4e793fe688315";
                $twilio = new Twilio\Rest\Client($sid, $token);

                $message = $twilio->messages
                    ->create($data['u_phone'], // to
                        array(
                                "from" => '+12283356840',
                            "messagingServiceSid" => "MG83c50a587312f457465e3f91fe073eab",
                            "body" => $acc
                        )
                    );

                print($message->sid);

        }


    }}
    ?>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script  src="assets/js/script.js"></script>
    </body>

    <!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
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