

<?php require('dbconfig.php');

$clientid = $_GET['clientid'];
$sql = "SELECT * FROM clients WHERE id='$clientid' ";
$run=mysqli_query($con,$sql);
$dataofuser = mysqli_fetch_assoc($run);


      ?>
<!DOCTYPE html>
<style>
   table, th, td {
  border: 1px solid lightgray;
  padding: 1%;
}
</style>
<html lang="en"><head></head><body style="background-color: rgba(128, 128, 128, 0.068);" data-new-gr-c-s-check-loaded="14.1062.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1062.0"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true" style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
   
    <title>pet</title>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>





  <div id="header" style="background-color: rgba(128, 128, 128, 0.068);
    /* position: absolute; */
    background-image: linear-gradient(rgba(19, 64, 70, 0.7), rgba(19, 64, 70, 0.7)), url(https://innergeeksolutions.com/ng/public/front/img/animal.png);
    background-position-x: center;
    background-position-y: 130px;
    background-repeat: no-repeat;
    background-size: 100% 450px;
    height: 85vh;">
    <div class="contact" style="text-align: center;margin-top: 20px;background-color: #efefef;padding: 1%;border-radius: 31px;">
      <p>
        <a href="#" style="color: black;margin: 1%;text-decoration: none;"><i class="fa fa-phone" aria-hidden="true"></i>
(+966) 503456789</a><a href="#" style="color: black;margin: 1%;text-decoration: none;"><i class="fa fa-envelope" aria-hidden="true"></i>
petcare@domain.com</a><a href="#" style="color: black;margin: 1%;text-decoration: none;"><i class="fa fa-home" aria-hidden="true"></i>
RJGR+G56 Alyasmin, Riyadh
        </a>
      </p>
    </div>

      <div style="height: 120px;
width: 90%;
background-color: white;
border-radius: 110px;
position: relative;
left: 5%;
right: 5%;
z-index: 1;">
  <button style="border-bottom-left-radius:110px; border-top-left-radius:110px; 
  background-color: white;
color: black;
float: left;
border: none;
outline: none;
cursor: pointer;
padding: 14px 16px;
font-size: 17px;
width: 10%;
height: 120px;
position: relative;
left: 20%;
right: 20%;
z-index: 2;"><a href="home.php" style="text-decoration: none;
    color: black;">Home</a></button>
  <button style="background-color: white;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 10%;
    height: 120px;
    position: relative;
    left: 20%;
    right: 20%;
    z-index: 2;">
    <a href="aboutus.php?clientid=<?php echo $dataofuser['id']; ?>" style="text-decoration: none;color: black;">About us</a></button>

<button style="background-color: white;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 10%;
    height: 120px;
    position: relative;
    left: 20%;
    right: 20%;
    z-index: 2;"><a href="profile.php?email=<?php echo $dataofuser['email']; ?>" style="text-decoration: none;color: black;">profile</a></button>

<button style="background-color: white;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 10%;
    height: 120px;
    position: relative;
    left: 20%;
    right: 20%;
    z-index: 2;">
    <a href="pet.php?email=<?php echo $dataofuser['email']; ?>" style="text-decoration: none;color: black;">pets</a></button>

<button style="background-color: white;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 10%;
    height: 120px;
    position: relative;
    left: 20%;
    right: 20%;
    z-index: 2;">
    <a href="apointment.php?clientid=<?php echo $dataofuser['id']; ?>" style="text-decoration: none;color: black;">appointment</a></button>

  <button style="border-bottom-right-radius:110px; border-top-right-radius:110px; background-color: white;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 10%;
    height: 120px;
    position: relative;
    left: 20%;
    right: 20%;
    z-index: 2;"><a href="aboutus.php?clientid=<?php echo $dataofuser['id']; ?>" style="text-decoration: none;
    color: black;">ContactUs</a></button>

  <button style="background-color: white;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 10%;
    height: 120px;
    position: relative;
    left: 20%;
    right: 20%;
    z-index: 2;">
      <i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 36px;"></i>
  
  </button>

</div>
    <div class="header" style="color: #ffffff;
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 60px;
    /* float: left; */
    /* margin-left: 10%; */
    float: none;
    text-align: center;">
     
      <div class="sign-center" style="width: 100%;
    display: flex;
    align-items: start;">

                      
            <button style="color: white;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 17px;
    width: 200px;
    height: 65px;
    border-radius: 50px;
    text-align: center;
    /* margin-right: 50px; */
    background-color: #AAC9CE;
    animation-name: example;
    animation-duration: 8s;
    transition: width 2s;margin-right: 50px;
    margin-top: 10px;">
    <i class="fa fa-paw" aria-hidden="true"></i>

    <a href="logout.php" style="color: black;text-decoration: none;">
    logout</a></button>


              
      </div>
    </div>
  </div>
     <section class="" id="login-sec" style="color: black;
    width: 100%;
    padding: 30px;
    margin: 0 auto;
    box-sizing: border-box;color: #5A8288;width: 1000px;">
        <div style="
;
    width: 100%;
    text-align: center;
    display: flex;
    flex-direction: column;
    background-color: #FBFBFB;
    color: #5A8288;
    border-radius: 200px;">
            <h3 style="font-size: 30px;
    font-weight: bold;
    /* margin-top: 60px; */
    color: #5A8288;/* color: #ffffff; */
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 60px;
    /* float: left; */
    /* margin-left: 10%; */
    float: none;
    /* text-align: center; */margin: 0;">Review </h3>


            
            <form action="review.php?clientid=<?php echo $dataofuser['id'] ?>" enctype="multipart/form-data" method="post" style="max-width: 700px;
    width: 100%;
    /* padding: 20px; */
    margin-top: 0;
    color: #5A8288;margin: 2rem auto;
    text-align: left;">
           
        
           <label for="name" style="color: #638A8F;"><b>Name:</b></label>
      <input type="text" placeholder="Enter Name" name="name" required style="width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 200px;">

      <label for="email" style="color: #638A8F;"><b>E-mail</b></label>
      <input type="email" placeholder="Enter Email" name="email" required style="width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 200px;">

      <textarea name="description" placeholder="Write something.." style="height:200px ;width: 100%; background-color: #F1F1F1; border: none;padding: 20px;" required=""></textarea>

<input type="hidden" name="client_id" value="<?php echo $clientid; ?>">
               
                <input class="apointment-form-btn" name="submit" type="submit" value="submit review" style="padding: 15px 25px;
    margin-top: 20px;
    width: 100%;
    color: white;
    border-radius: 30px;
    cursor: pointer;
    background-color: #72979D;">

              

            </form>
        </div>
    </section>

    <?php 

$con = mysqli_connect("localhost","root","","petcare2");

if(isset($_POST['submit'])){
    

    $client_id = $_POST['client_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];

    // $password = $_POST['image'];
    
    $query = "INSERT INTO reviews (client_id, name , email , description ) 
    VALUES ('$client_id' , '$name' ,'$email', '$description')";
                                                                                                        //if we have no username and pass in the data base then redirect to the current page  
    
    if(mysqli_query($con, $query)){
        
    
        ?>

<script>
            
            swal({
  title: "Congratualtions",
  text: "you have successfully submitted the review",
  icon: "success",
  button: "OK",
})
.then((willDelete) => {
  if (willDelete) {
    window.open('review.php?clientid=<?php echo $client_id; ?>' , '_self');
  } 
});
            // alert('you have successfully added the pet !!');
        
            </script>
      
        
        
        <?php
           

       
        
  }
    else {
        
        ?>
        <script>
            alert('username and password does not matches !!');
            window.opener('login.php','_self');

       </script>
        
        
        <?php
    }
               
}

?>
