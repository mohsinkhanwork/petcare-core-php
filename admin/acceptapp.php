<?php require('../dbconfig.php');

$id = $_GET['id'];
$sql = "SELECT * FROM appointments WHERE id='$id' ";
$run=mysqli_query($con,$sql);
$dataofapp = mysqli_fetch_assoc($run);


    
    $query = "UPDATE appointments SET 
                accept = 1
    
                WHERE id = $id; ";
                                                                                                        //if we have no username and pass in the data base then redirect to the current page  
    $run = mysqli_query($con, $query); 
    if($run){
        
    
        ?>
        <script>
            
    
            alert('you have successfully accepted the appointments !!');
            history.go(-1)
            </script>
        
        
        <?php
           

       
        
  }
    else {
        
        ?>
        <script>
            alert('falsie data!!');
            window.opener('login.php','_self');

       </script>
        
        
        <?php
    }
               

?>