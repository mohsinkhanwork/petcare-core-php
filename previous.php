

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">

  <div id="header" style="background-color: rgba(128, 128, 128, 0.068);
    /* position: absolute; */
    background-image: linear-gradient(rgba(19, 64, 70, 0.7), rgba(19, 64, 70, 0.7)), url(https://innergeeksolutions.com/ng/public/front/img/animal.png);
    background-position-x: center;
    background-position-y: 130px;
    background-repeat: no-repeat;
    background-size: 100% 450px;
    height: 85vh;">
    <div class="contact" style="text-align: center;margin-top: 20px;background-color: lightgray;padding: 1%;border-radius: 31px;">
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
z-index: 2;"><a href="login_client.php" style="text-decoration: none;
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
     

  <section style="padding: 40px;
    background-color: #fff;">
        <h1 class="put-title" style="text-align: center;
    padding: 20px;">
            Previous Appointment
        </h1>
        <div class="put-list-content">

            
            <table id="" style="font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;">
                <tbody><tr>
                    <th class="js-sort-string">No.</th>
                    <th class="js-sort-string">Name</th>
                    <th class="js-sort-string">Servise</th>
                    <th class="js-sort-date">data</th>
                    <th class="js-sort-date">time</th>
                    <th class="js-sort-string">Note</th>
                    <!-- <th>Action</th> -->
                  
                </tr>
                
                <?php 
                          
                          $clientid = $dataofuser['id'];
                         $sql = "SELECT * FROM appointments where client_id = $clientid ";


                         $res = mysqli_query($con,$sql);

                         if($result = mysqli_query($con, $sql)){
                         if(mysqli_num_rows($res) > 0){
                             $count=0;

                          while($data = mysqli_fetch_assoc($res)){
                             $count++;
                               ?>
                     
                     <tr>
                         <th><?php echo $count; ?></th>
                         <th><?php echo $data['pet_id']; ?></th>
                         <th><?php echo $data['type']; ?></th>
                         <th><?php echo $data['date']; ?></th>
                         <th><?php echo $data['time']; ?></th>
                         <th><?php echo $data['note']; ?></th>
                         <!-- <th>
                            <a href="updatepet.php?id=<?php echo $data['id']; ?>">
                                Review
                            </a>
                         </th> -->

                         </tr>

                         <?php
                      }
                     } 
                  } ?>
                                   

            </tbody>
        
        
        </table>
            <br><br><br>
        </div>
    </section>