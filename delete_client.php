<?php  require('dbconfig.php');

$id = $_REQUEST['id'];
    
    $query = "DELETE FROM clients WHERE id ='$id'; "; 
    
    $run = mysqli_query($con,$query);
    if($run == true){
?>
   
   <script>
       window.open('index.php' , '_self');


</script>
   
   <?php
    }
   
?>