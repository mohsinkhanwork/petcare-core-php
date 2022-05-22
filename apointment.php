

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
    /* text-align: center; */margin: 0;">Update form </h3>


            
            <form action="apointment.php" enctype="multipart/form-data" method="post" style="max-width: 700px;
    width: 100%;
    /* padding: 20px; */
    margin-top: 0;
    color: #5A8288;margin: 2rem auto;">
                <p style="color: #638A8F;">Edit your data:</p>
                <br>
                <label>Select Pet:
                    <select name="pet_id" style="width: 100%;
    /* height: 30px; */
    padding: 10px;
    margin-top: 15px;
    background-color: #F1F1F1;
    color: #638A8F;
    border: none;">
                        <option> select pet</option>
                                                    <option value="ASD">ASD</option>
                                                    <option value="pet name">pet name</option>
                      </select>
                </label>

                                <select name="type"  style="width: 100%;
    /* height: 30px; */
    padding: 10px;
    margin-top: 15px;
    background-color: #F1F1F1;
    color: #638A8F;
    border: none;">
                    <option>Select type</option>
                    <?php 
                          
                           
                          $sql = "SELECT * FROM appointment_availables ";


                          $res = mysqli_query($con,$sql);

                          if($result = mysqli_query($con, $sql)){
                          if(mysqli_num_rows($res) > 0){
                              $count=0;

                           while($dataofavapet = mysqli_fetch_assoc($res)){
                              $count++;
                                ?>
                        <option value="Pet Checkup"><?php echo $dataofavapet['type']; ?></option>

                        <?php
}
} 
} ?>
                  
                                    </select>

                <select name="date" style="width: 100%;
    /* height: 30px; */
    padding: 10px;
    margin-top: 15px;
    background-color: #F1F1F1;
    color: #638A8F;
    border: none;">
                    <option>Select the date Availablity</option>

                    <?php 
                          
                           
                          $sql = "SELECT * FROM appointment_availables ";


                          $res = mysqli_query($con,$sql);

                          if($result = mysqli_query($con, $sql)){
                          if(mysqli_num_rows($res) > 0){
                              $count=0;

                           while($dataofavapet = mysqli_fetch_assoc($res)){
                              $count++;
                                ?>
                    <option value="2021 12 12" ><?php echo $dataofavapet['date']; ?></option>
                    <?php
}
} 
} ?>
                </select>

                <select name="time" style="width: 100%;
    /* height: 30px; */
    padding: 10px;
    margin-top: 15px;
    background-color: #F1F1F1;
    color: #638A8F;
    border: none;">
                    <option>Select the time Availablity</option>
                    <?php 
                          
                           
                          $sql = "SELECT * FROM appointment_availables ";


                          $res = mysqli_query($con,$sql);

                          if($result = mysqli_query($con, $sql)){
                          if(mysqli_num_rows($res) > 0){
                              $count=0;

                           while($dataofavapet = mysqli_fetch_assoc($res)){
                              $count++;
                                ?>
                    <option value="10:12 Am" ><?php echo $dataofavapet['time']; ?></option>

                    <?php
}
} 
} ?>
                 
                </select>
                <!--
                <input type="date" name="date" placeholder="Date" required />
                <input type="time" name="time" placeholder="Time" required />
                -->
                <textarea name="note" cols="30" rows="10" placeholder="Note" style="margin-top: 20px;
    width: 100%;
    /* padding: 20px; */
    color: #638A8F;
    background-color: #F1F1F1;
    border: none;" spellcheck="false"></textarea>

<input type="hidden" name="client_id" value="<?php echo $clientid; ?>">
               
                <input class="apointment-form-btn" name="submit" type="submit" value="Update" style="padding: 15px 25px;
    margin-top: 20px;
    width: 100%;
    color: white;
    border-radius: 30px;
    cursor: pointer;
    background-color: #72979D;">

                <div class="servise-list" style="width: 100%;
    margin-top: 40px;">
                    <a href="#" style="background-color: #72979D;
    border-radius: 30px;
    padding: 15px 35px;
    margin: 0;
    color: white;">Upcoming Appointment</a>
                    <a href="previous.php?clientid=<?php echo $dataofuser['id']; ?>" style="background-color: #72979D;
    border-radius: 30px;
    padding: 15px 35px;
    margin: 0;
    color: white;">Previous Appointment</a>
                </div>

            </form>
        </div>
    </section>

    <?php 

$con = mysqli_connect("localhost","root","","petcare2");

if(isset($_POST['submit'])){
    
    $pet_id = $_POST['pet_id'];
    $client_id = $_POST['client_id'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $time = $_POST['time'];
    $note = $_POST['note'];
    // $password = $_POST['image'];
    
    $query = "INSERT INTO appointments (pet_id, client_id, type ,date, time, note) 
    VALUES ('$pet_id', '$client_id' , '$type' ,'$date', '$time', '$note')";
                                                                                                        //if we have no username and pass in the data base then redirect to the current page  
    
    if(mysqli_query($con, $query)){
        
    
        ?>
        <script>
            
    
            alert('you have successfully created the appointment !!');
            window.open('apointment.php?clientid=<?php echo $client_id; ?>' , '_self');

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
