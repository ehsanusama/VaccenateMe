<?php
$user = $_SESSION['status'];
?>


<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <?php if($user==0){
                    ?>
                    <li class="active">
                        <a href="index.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="appointment-list.php"><i class="fe fe-layout"></i> <span>Add Child</span></a>
                    </li>
                    <li>
                        <a href="baby-list.php"><i class="fe fe-user"></i> <span>Children</span></a>
                    </li>



                <?php }


                 if ($user==1){
                ?>
                <li class="active">
                    <a href="index.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="announcement.php"><i class="fe fe-layout"></i> <span>Create Announcement</span></a>
                </li>
                    <li>
                        <a href="parent-list.php"><i class="fe fe-layout"></i> <span>Parents</span></a>
                    </li>
                <li>
                    <a href="baby-list.php"><i class="fe fe-user"></i> <span>Children</span></a>
                </li>
                     <li>
                         <a href="profileuser.php"><i class="fe fe-user"></i> <span>Profile</span></a>
                     </li>
                <?php }   ?>



            </ul>
        </div>
    </div>
</div>