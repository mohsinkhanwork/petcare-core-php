
<?php require('dbconfig.php');

$id = $_GET['id'];
$sql = "SELECT * FROM pets WHERE id='$id' ";
$run=mysqli_query($con,$sql);
$dataofpet = mysqli_fetch_assoc($run);

$clientid = $dataofpet['clientid'];
$sql = "SELECT * FROM clients WHERE id= $clientid ";
$run=mysqli_query($con,$sql);
$dataofcleint = mysqli_fetch_assoc($run);




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
    z-index: 2;"><a href="aboutus.php" style="text-decoration: none;color: black;">AboutUs</a></button>

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
    z-index: 2;"><a href="profile.php?email=<?php echo $dataofcleint['email']; ?>" style="text-decoration: none;color: black;">profile</a></button>

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
    z-index: 2;"><a href="pet.php?email=<?php echo $dataofcleint['email']; ?>" style="text-decoration: none;color: black;">pets</a></button>

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
    <a href="apointment.php?clientid=<?php echo $dataofcleint['id']; ?>" style="text-decoration: none;color: black;">appointment</a></button>

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
     


    <main>

        <div  style="margin-bottom: -1000px;">
            <!-- HELP  -->
            <section id=""  style="width: 80vw;
    max-width: 1200px;
    margin: 3rem auto;
    margin-top: 0;
    padding-top: 20px;display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">
                <h1>Choose the required service:</h1>
                <div  style="display: flex;
    justify-content: space-between;
    align-items: center;">
                    <div  style="position: relative;
    margin: 0 5%;
    text-align: center;
    padding: 1rem;
    border-radius: 10px;
    padding: 60px 10px;
    max-width: 400px;
    width: 100%;
    min-height: 240px;
    background-color: #72979D;display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">
                        <span class="card__title">Adding</span>
                        <h3>A new family memeber added to the family?</h3>
                        <p>Congratulations! You decided to bring a new member into your household, Make sure to add him
                            now!</p>
                        <div class="card__link container__center">
                            <a href="#form-section">Add a Pet now</a>
                        </div>
                    </div>
                    <div  style="position: relative;
    margin: 0 5%;
    text-align: center;
    padding: 1rem;
    border-radius: 10px;
    padding: 60px 10px;
    max-width: 400px;
    width: 100%;
    min-height: 240px;
    background-color: #72979D;display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">
                        <span class="card__title">Listing</span>
                        <h3>Keep track of your Pets that are registered!</h3>
                        <p>Don’t miss out keep track of your current pet’s list and make sure to enroll them all, are we
                            missing someone?</p>
                        <div class="card__link container__center">
                            <a href="#put-list">View now</a>
                        </div>
                    </div>
                    <div  style="position: relative;
    margin: 0 5%;
    text-align: center;
    padding: 1rem;
    border-radius: 10px;
    padding: 60px 10px;
    max-width: 400px;
    width: 100%;
    min-height: 240px;
    background-color: #72979D;display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">
                        <span class="card__title">Managing</span>
                        <h3>Do you need to make some adjustment to your list?</h3>
                        <p>New update? Don't worry, Manage your pet's list now. View, edit or delete as you please and
                            need. </p>
                        <div class="card__link container__center">
                            <a href="#put-list">Manage now</a>
                        </div>
                    </div>
                </div>
            </section>



            <section style="display: flex;
    gap: 20px;
    background-color: #72979D;
    overflow: hidden;">
                <img  src="./img/animal2.jpg" alt="" style="width: 50%;">
                <form action="updatepet.php?id=<?php echo $dataofpet['id']; ?>" method="post" enctype="multipart/form-data" style="width: 60vw;
    max-width: 800px;
    margin: 2rem auto;
    color: white;">

        <input type="hidden" name="clientid" value="<?php echo $dataofcleint['id']; ?>">
        <input type="hidden" name="id" value="<?php echo $dataofpet['id']; ?>">
                    <div class="form-row" style="display: flex;">
                        <input type="text" placeholder="Name" required name="name" 
                        value="<?php echo $dataofpet['name']?>" style="padding: 10px 20px;
    width: 50%;
    margin: 10px 5px;
    /* background-color: transparent; */
    border: none;">
                        <input type="text" placeholder="Bread" required 
                        value="<?php echo $dataofpet['bread']?>"
                        name="bread" style="padding: 10px 20px;
    width: 50%;
    margin: 10px 5px;
    /* background-color: transparent; */
    border: none;">
                    </div>
                    <div class="form-row" style="display: flex;">

                    </div>
                    <div class="form-row" style="display: flex;">
                        <input class="dob" type="date" name="birth_date" 
                        value="<?php echo $dataofpet['birth_date']?>"
                        placeholder="data of birth" required="" style="width: 49%;padding: 10px 20px;
    width: 50%;
    margin: 10px 5px;
    /* background-color: transparent; */
    border: none;">
                    </div>

                    <br>
                    <div class="form-row  " style="display: flex;">

                        <div class="col" style="margin-right: 30px;">
                            <label> What's your pet gender? </label> <br>
                            <input type="radio" name="gender" value="female"> <label for="Female">Female</label>
                            <br>
                            <input type="radio" name="gender" value="male"> <label for="Male">Male</label> <br>
                        </div>
                        <div class="col" style="margin-right: 30px;">
                            <label> What's your pet neutered status? </label> <br>
                            <input type="radio" name="neutered" value="neutered"><label for="Neutered">Neutered</label>
                            <br>
                            <input type="radio" name="neutered" value="notneutered"> <label for="NotNeutered">Not
                                Neutered</label> <br>
                        </div>

                    </div>
                    <br>
                    <div  style="justify-content: space-between;display: flex;">

                        <div class="col" style="margin-right: 30px;">
                            <label for="medlist"> Medical History:</label> <br><br>
                            <textarea id="textarea" cols="50" rows="5" name="medical_description" 
                            
                             spellcheck="false" style="padding: 20px;
    width: 80%;"><?php echo $dataofpet['medical_description']?></textarea>

                        </div>
                        <div class="col-2" style="">
                            <label> Vaccinations List: </label> <br><br>
                            <textarea id="textarea" cols="50" rows="5" name="vaccination_description" 
                            
                            style="padding: 20px;
    width: 80%;"><?php echo $dataofpet['vaccination_description']?></textarea>

                        </div>

                    </div>
                    <br>
                    <div  style="display: flex;
    align-items: center;">

                        <!-- <label for="photo"> Add photo from Image file: </label>
                        <input type="file" name="photo" id="" style="width:300px;padding: 10px 20px;
    width: 50%;
    margin: 10px 5px;
    /* background-color: transparent; */
    border: none;" required=""> -->


                    </div>
                    <button name="submit" value="submit" type="submit" style="background-color: #AAC9CE;
    color: white;
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
    transition: width 2s;">update a pet</button> 
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;

        <a href="delete_pet.php?id=<?php echo $dataofpet['id']; ?>&clientemail=<?php echo $dataofcleint['email']; ?>" style="    background-color: #AAC9CE;
    color: white;
    /* display: block; */
    border: none;
    outline: none;
    padding: 4% 5% 4% 7%;
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
    transition: width 2s;">delete a pet</a>
                </form>
            </section>
           

        </div>
    </main>



    <?php 

$con = mysqli_connect("localhost","root","","petcare2");

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $clientid = $_POST['clientid'];
    $id = $_POST['id'];
    $bread = $_POST['bread'];
    $birth_date = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $neutered = $_POST['neutered'];
    $medical_description = $_POST['medical_description'];
    $vaccination_description = $_POST['vaccination_description'];
    // $password = $_POST['image'];
    
    $query = "UPDATE pets SET 
                name = '$name', clientid = '$clientid' , bread = '$bread' ,  birth_date = '$birth_date' , gender = '$gender' , 
                neutered = '$neutered' , medical_description = '$medical_description' , vaccination_description = '$vaccination_description' 
    
                WHERE id = $id; ";
                                                                                                        //if we have no username and pass in the data base then redirect to the current page  
    
    if(mysqli_query($con, $query)){
        
    
        ?>
        <script>
            
    
            alert('you have successfully updated the pet !!');
            window.open('updatepet.php?id=<?php echo $id; ?>' , '_self');
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