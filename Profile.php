<?php  
// session_start();  
require('dbconfig.php');

$email = $_GET['email'];
$sql = "SELECT * FROM clients WHERE email='$email' ";
$run=mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($run);


      ?>
<!DOCTYPE html>
<style>
   table, th, td {
  border: 1px solid lightgray;
  padding: 1%;
}
</style>
<html lang="en"><head><style>
   table, th, td {
  border: 1px solid lightgray;
  padding: 1%;
}
</style>
</head><body style="background-color: rgba(128, 128, 128, 0.068);" data-new-gr-c-s-check-loaded="14.1062.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1062.0"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true" style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
   
    <title>profile</title>

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
    <a href="aboutus.php?clientid=<?php echo $data['id']; ?>" style="text-decoration: none;color: black;">About us</a></button>

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
    z-index: 2;"><a href="profile.php?email=<?php echo $email; ?>" style="text-decoration: none;color: black;">profile</a></button>

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
    <a href="pet.php?email=<?php echo $data['email']; ?>" style="text-decoration: none;color: black;">pets</a></button>

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
    <a href="apointment.php?clientid=<?php echo $data['id']; ?>" style="text-decoration: none;color: black;">appointment</a></button>

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
    z-index: 2;"><a href="aboutus.php?clientid=<?php echo $data['id']; ?>" style="text-decoration: none;
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

    <a href="logout.php" style="color: white;text-decoration: none;">
    logout</a></button>


              
      </div>
    </div>
  </div>
     


    <main>

    <div class="profile-container" style="display: flex;
    align-items: center;
    gap: 30px;">
        <div class="profilecard" style="display: block;
    background-color: #72979D;
    position: relative;
    float: left;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
    text-align: center;
    min-height: 766px;
    margin-left: 80px;
    margin-top: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
    color: black;
    border-radius: 20px;">
            <div style="position: relative;">
                <img src="clientimages/<?php echo $data['image']?>" alt="Profile Picture" width="150" class="profile-img" style="object-fit: cover;
    opacity: 1;
    transition: opacity .2s ease-in-out;
    width: 160px;
    height: 160px;border-radius: 50%;">
                <div class="profile-content" style="position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity .2s ease-in-out;">

                    <!-- <input type="file" name="" id="file" accept="image/*">
                    <label for="file" class="profilepic-text"><span class="profile-icon"><i class="material-icons">edit</i></span></label> -->
                </div>
            </div>
            <ul style="list-style-type: none;
    padding: 0;
    position: relative;
    font-size: large;
    color: #bdd1d3;">
                <li style="margin: 40px;
    border-bottom: solid #728486c4 1px;">
                    <h3 style="color: #ffffff;
    font: italic 1.2em Fira Sans, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 60px;
    float: none;
    text-align: center;"><?php echo $data['first_name'] . ' ' . $data['last_name'] ;  ?></h3>
                </li>
                <li style="margin: 40px;
    border-bottom: solid #728486c4 1px;">
                    <h4><?php echo $data['phone']?></h4>
                </li>

                <li style="margin: 40px;
    border-bottom: solid #728486c4 1px;">
                    <h4><?php echo $data['email']?></h4>
                </li>
          
                <li style="margin: 40px;
    border-bottom: solid #728486c4 1px;">
                    <h4><a style="text-decoration: none;color: lightgrey;" href="delete_client.php?id=<?php echo $data['id']; ?> " style="text-decoration: none;">Delete account</a></h4>
                </li>
            </ul>
            <!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png" width="150"> -->

        </div>


        <div class="">

            <div class="container" style="background-color: #ffffff96; border-radius: 200px;  color: #5a8288; ">
                <form action="Profile.php" method="post" class="woner-form" 
                style="max-width: 650px; padding: 40px; color: #5a8288;width: 100%;">

                    <h3 for="subject" style=" text-align: center; margin-top: 14px; color: #5a8288; font: italic 1.2em &quot;Fira Sans&quot;, serif;
    font-family: 'Coming Soon', cursive;
    font-weight: 100;
    font-size: 60px;
    /* float: left; */
    /* margin-left: 10%; */
    float: none;">Edit Profile:</h3>

            <label for="name"><b>First Name:</b></label>
                    <input type="text" name="first_name" value="<?php echo $data['first_name'];  ?>" required style="width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 200px;" value="">

<label for="name"><b>Last Name:</b></label>
                    <input type="text" name="last_name" value="<?php echo $data['last_name'];  ?>" required style="width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 200px;" value="">

                    <label for="email"><b>E-mail</b></label>
                    <input type="email" name="email" required value="<?php echo $data['email'];  ?>" style="width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 200px;">

                    <label for="city">City</label>
                    <select id="city" name="city" style="width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 200px;">
                        <option value="riyadh">Riyadh</option>
                        <option value="dammam">Dammam</option>
                        <option value="jeddah">Jeddah</option>
                    </select>

                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" >

                    <button type="submit" name="submit" value="submit"
                    style=" border-radius:200px ; background-color: #5a8288;padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    color: white;" aria-required="false">Submit</button>
                    <button type="reset" style="margin-bottom: 100px; border-radius:200px; 
                    background-color: #5a8288;padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    color: white;" aria-required="false">Cancel</button>

                </form>


            </div>



            <?php 

            if(isset($_POST['submit'])){

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $city = $_POST['city'];
 $id = $_POST['id'];



$con = mysqli_connect("localhost","root","","petcare2");

 
 
 $query = "UPDATE clients SET first_name = '$first_name', last_name = '$last_name' , email = '$email' , city = '$city' WHERE id = $id; "; 
 
 $run = mysqli_query($con,$query);
 if($run == true){
?>

<script>
            
            swal({
  title: "Congratualtions",
  text: "you have successfully updated the profile",
  icon: "success",
  button: "OK",
})
.then((willDelete) => {
  if (willDelete) {
    window.open('Profile.php?email=<?php echo $email; ?>' , '_self');
  } 
});
            // alert('you have successfully added the pet !!');
        
            </script>


<?php
 }
} else {

    // echo 'not uodated ';
}

?>