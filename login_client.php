
<?php   $con = mysqli_connect("localhost","root","","petcare");

if(!$con){
    echo "connection failed";
} else {

    // echo "conection done";
} 

?>

<!DOCTYPE html>

<html>

<head>

  <title>pet care</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

</head>



<body style="background-color: rgba(128, 128, 128, 0.068);">


  <div id="header" style="background-color: rgba(128, 128, 128, 0.068);
    /* position: absolute; */
    background-image: linear-gradient(rgba(19, 64, 70, 0.7), rgba(19, 64, 70, 0.7)), url(https://templatekit.jegtheme.com/petzy/wp-content/uploads/sites/31/2021/02/cat-watching.jpg);
    background-position-x: center;
    background-position-y: 130px;
    background-repeat: no-repeat;
    background-size: 100% 450px;
    height: 85vh;">
    <div class="contact" 
    style="text-align: center;margin-top: 20px;background-color: #efefef;padding: 1%;border-radius: 31px;">
      <p>
        <a href="#" style="color: black;margin: 1%;text-decoration: none;"><i class="fa fa-phone" aria-hidden="true"></i>
(+966) 503456789</a><a href="#" style="color: black;margin: 1%;text-decoration: none;"><i class="fa fa-envelope" aria-hidden="true"></i>
petcare@domain.com</a><a href="#" style="color: black;margin: 1%;text-decoration: none;"><i class="fa fa-home" aria-hidden="true"></i>
RJGR+G56 Alyasmin, Riyadh
        </a>
      </p>
    </div>

      <div  style="height: 120px;
width: 90%;
background-color: white;
border-radius: 110px;
position: relative;
left: 5%;
right: 5%;
z-index: 1;">
  <button style="border-bottom-left-radius:110px; border-top-left-radius:110px; margin-left: 200px; background-color: white;
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
z-index: 2;" ><a href="login_client.php" style="text-decoration: none;
    color: black;">Home</a></button>
  <button  style="background-color: white;
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
    <a href="#aboutus" style="text-decoration: none;color: black;">About us</a></button>

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
    z-index: 2;" ><a href="#aboutus" style="text-decoration: none;
    color: black;">ContactUs</a></button>

  <button  style="background-color: white;
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
      <h3 style="margin-left: 0px; margin-bottom: 10px;color: #ffffff;
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 60px;
    text-align: center;
    float: none;
    padding-top: 3%;margin-left: 0px;
    margin-bottom: 10px;text-align: left;">Your pet's health. <br> Our priority.</h3>
      <div class="sign-center" style="width: 100%;
    display: flex;
    align-items: start;">

                      
            <button  style="color: white;
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
    <a href="#loginclient" style="color: black;text-decoration: none;">Get Started as <br>Client</a></button>

              
      </div>
    </div>
  </div>
     
    





  


<div  style="display: flex;
    flex-direction: row;
    margin-top: 50px;
    margin-bottom: 50px;
    gap: 30px;
    padding-left: 20px;
    padding-right: 20px;">

    <div  id="" style="background-color: #ffffff96; border-radius: 200px; padding: 20px;background-color: #ffffff96;
    border-radius: 200px;
    padding: 20px;width: 100%;
    max-width: 650px;">
      <h3 style=" margin-bottom: 0%;color: #5a8288; margin-top: 10%;/* color: #ffffff; */
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 60px;
    /* float: left; */
    /* margin-left: 10%; */
    float: none;
    text-align: center;">Our Company</h3>
      <br>
      <p style="/* margin-top: 50px; */
    color: #99bfc5d5;
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 20px;
    /* float: left; */
    /* margin-left: 10%; */
    text-align: center;">Are you a new pet owner, or you acquire multiple number of pets? Our services and online planing in managing the veterinary clinic appointment making and results reviewing and have a contact with our veterinarian through email for advice and maintaining food supply. Plan for the future care of your pet today.                                                </p>
        <br><br><br><br>

      <p><i style="font-size: 50px; margin-left: 50px;color: black;
    position: relative;
    top: 8px;" class="material-icons">store</i> <i style=" font-size: 50px; margin-left: 250px;color: black;
    position: relative;
    top: 8px;" >phone</i> </p>

      <p style="margin-bottom: 0%;"><i style="font-size: 30px; margin-left: 50px; color: #5a8288;">Our office</i> <i style="font-size: 30px; margin-left: 210px;color: #5a8288;">Our contact</i> </p>

      <p style="margin-top: 0%;margin-top: 50px; */
    color: #99bfc5d5;
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 20px;
    /* float: left; */
    /* margin-left: 10%; */
    color: #99bfc5d5;
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 20px;text-align: center;"><i style="font-size: 18px; margin-left: 10px; ">RJGR+G56 Alyasmin, Riyadh     </i> <i style="font-size: 18px; margin-left: 190px;">(+966)503456789                                     <br><span style="margin-left: 450px;">petcare@domain.com</span></i> </p>
   
    </div>
    <div id="aboutus" style="background-color: #ffffff96; border-radius: 200px; padding: 20px; min-height: 720px;width: 100%;
    max-width: 650px;">
      <h3 style="margin-top: 10%;  color: #5a8288;/* color: #ffffff; */
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 60px;
    /* float: left; */
    /* margin-left: 10%; */
    float: none;
    text-align: center;">About Us
      </h3>
      <br>
      <p style="color: #99BFC5D5;/* margin-top: 50px; */
    color: #99bfc5d5;
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 20px;
    /* float: left; */
    /* margin-left: 10%; */
    text-align: center;">Are you a new pet owner, or you acquire multiple number of pets? Our services and online planing in managing the veterinary clinic appointment making and results reviewing and have a contact with our veterinarian through email for advice and maintaining food supply. Plan for the future care of your pet today.</p>

      <p>
        <img style=" width: 100px; height: 300px; margin-top: 5%; margin-right: 10%; margin-left: 10%;" src="https://templatekit.jegtheme.com/petzy/wp-content/uploads/sites/31/2021/02/EFQ3ZHR.jpg"><img style=" width: 100px; height: 300px; margin-top: 0px; margin-right: 10%;" src="https://templatekit.jegtheme.com/petzy/wp-content/uploads/sites/31/2021/02/PWZQYFE.jpg"><img style=" width: 100px; height: 300px; margin-top: 5%; margin-right: 10%;" src="https://templatekit.jegtheme.com/petzy/wp-content/uploads/sites/31/2021/02/4647HBP.jpg">
    

      </p>

  

    </div>

  </div>

  <div class="login" id="loginclient" style="background-color:#FBFBFB ; border-radius: 100px;  margin-top: 50px; margin-bottom: 50px;">


  <form action="login_client.php" class="woner-form" enctype="multipart/form-data" method="post"  style="max-width: 800px;
    margin: 2rem auto;">
  <div class="container">
    <h3 style="margin-left:0%; margin-bottom: 0%; font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 60px;
    /* float: left; */
    /* margin-left: 10%; */
    float: none;
    text-align: center;color: #5a8288;">Login</h3>
            
    <hr>

    <label for="email"><b>Email</b></label>

    <input type="email" placeholder="Enter Email" name="email" required style="width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 200px;">


    <label for="psw"><b>Password</b></label>

    <input type="password" placeholder="Enter Password" name="password" required style="width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 200px;">


  <div style="display: flex;">

  <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me</label> 
     <br>
     <span style="margin-left: 12px;">
      <a href="forgetPassword.php" style="color: black;">Forgot password?</a>
    </span>
  </div>
  <br />
  <span style="margin-left: 12px;">
      <a href="index.php" style="color: black;">dont have an account? create here</a>
    </span>
   

    <hr>
    <div aria-required="false">
    <input type="submit" name="login" value="login" style="border-radius: 200px;
    margin-bottom: 0px;
    background-color: #5a8288;padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    color: white;">
    </div>
  </div>

  <!-- <p style="text-align: center; margin-top: 0%;  ">don't have an account? <a href="https://innergeeksolutions.com/ng//home/registration" style="color: #5a8288;">Sign up</a>.
  </p> -->
  <br>

</form>
</div>
<footer>
    <div class="container" style="background-color: #73a5ac96;">
      <h3 style="color: #ffffff;
    font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 60px;
    /* float: left; */
    /* margin-left: 10%; */
    float: none;
    text-align: center;">Qucik Links
        <p style="font-size: 30px; "><a style="text-decoration: none;color: black;" href="aboutus.php">AboutUs</a><br>Services<br>
          Pricing<br>Team<br><a style="text-decoration: none;color: black;" href="#contact">ContactUs</a></p>
      </h3>
    </div>
  </footer>




<?php 

$con = mysqli_connect("localhost","root","","petcare2");

if(isset($_POST['login'])){
    
$email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = mysqli_query($con,"SELECT * FROM clients WHERE email = '$email' AND password = '$password'");

    
    if(mysqli_num_rows($query) >0 ){
      
        
  
        ?>
        <script>
            alert('you have successfully logged !!');
            // location.href = 'pet.php';
            window.open('pet.php?email=<?php echo $email; ?>' , '_self');
       

       </script>
        
        
        <?php
        
  }
    else {
        
        ?>
        <script>
            alert('username and password does not matches !');
            window.opener('login_client.php','_self');

       </script>
        
        
        <?php
    }
               
}

?>



</body>

</html>