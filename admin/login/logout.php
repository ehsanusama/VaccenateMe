<?php
//==================================logout function====================================
function logout(){
    if(isset($_GET['logout'])){
        if(session_destroy()){
            ?>
            <script>
                setTimeout(function(){ window.location.href="login/login.php"; });
            </script>
            <?php
        }
    }
}
?>