<?php  require('dbconfig.php'); ?>
 <!DOCTYPE html>
 <html>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>



<?php 

$id = $_REQUEST['id'];
$email = $_GET['clientemail'];
    
    $query = "DELETE FROM pets WHERE id ='$id'; "; 
    
    $run = mysqli_query($con,$query);
    if($run == true){
?>

<script>
            
            swal({
  title: "Congratualtions",
  text: "you have successfully deleted the pet",
  icon: "success",
  button: "OK",
})
.then((willDelete) => {
  if (willDelete) {
    window.open('pet.php?email=<?php echo $email; ?>' , '_self');
  } 
});
            // alert('you have successfully added the pet !!');
        
            </script>
   
   <?php
    }
   
?>

</html>  