<?php
session_start();
session_destroy();
?>
        <script>
            alert('you have successfully logged out !!');
            location.href = 'login_client.php';
       

       </script>
        
        
        <?php
?>