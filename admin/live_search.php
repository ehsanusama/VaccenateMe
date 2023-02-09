<?php
 function search(){

if(isset($_REQUEST['submitsearch']))
{
    $search_value = $_REQUEST['search'];

$conn = mysqli_connect("localhost",'root','','vms');
$sql= "SELECT * FROM user WHERE u_fname LIKE'%{$search_value}%' OR  u_lname LIKE'%{$search_value}%' OR  u_cnic LIKE'%{$search_value}%' OR  u_phone LIKE'%{$search_value}%'  ORDER BY u_id DESC  ";
$result=mysqli_query($conn,$sql)or die("SQL Query Failed.");

if(mysqli_num_rows($result)>0) {

    echo '<style>.table-data { display:none;}</style>';
    while ($data = mysqli_fetch_array($result)){
        ?>

        <tr style="">
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

?>