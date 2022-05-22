<?php
session_start();
session_destroy();
?>
        <script>
            alert('you have successfully logged out as admin !!');
            location.href = 'login_admin.php';
       

       </script>
        
        
        <?php
?>