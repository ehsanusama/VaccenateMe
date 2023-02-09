<?php


function email(){


    include ("connection/conection.php");

    //admin display

        include ("connection/conection.php");

        $sql ="SELECT * FROM user ";

        $qrun = mysqli_query($conn, $sql);
        if(mysqli_num_rows($qrun) >0 ){
            $row = mysqli_fetch_array($qrun);
            echo $row['u_email']."," ;
            while ($data = mysqli_fetch_array($qrun)){

                ?>

                <tr>

                    <td>
                        <p class="table-avatar">
                            <a href="#"><p style="text"> <?php
                            $sec=$data['u_email'].',';

                            echo $sec ;?> </a>
                        </p>
                    </td>
                </tr>

                <?php



            }
            echo    $data['u_email']."," ;


        }




}
?>
