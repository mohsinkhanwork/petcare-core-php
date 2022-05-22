<?php  require('dbconfig.php');

$id = $_REQUEST['id'];
$email = $_GET['clientemail'];
    
    $query = "DELETE FROM pets WHERE id ='$id'; "; 
    
    $run = mysqli_query($con,$query);
    if($run == true){
?>
   
   <script>
       alert('Pet Deleted Successfully');
       window.open('pet.php?email=<?php echo $email; ?>' , '_self');



</script>
   
   <?php
    }
   
?>