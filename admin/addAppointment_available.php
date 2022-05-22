<?php require('../dbconfig.php');

$email = $_GET['email'];
$sql = "SELECT * FROM admin WHERE email='$email' ";
$run=mysqli_query($con,$sql);
$dataofadmin = mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html>

<!-- head started -->
<?php

include('header.php')

?>


<!-- end head -->

<body>
    <div id="wrapper">

         <!-- /// -->

       <?php

include('nav.php')

    ?>

<!-- // nav bar end -->
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to the admin area</span>
                        </li>
                        <li>
                            <a href="logout_admin.php">
                                <i class="fa fa-sign-out"></i> Logout
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="alert alert-danger edit_alert" style="display:none">
                <ul class="list-group">
                </ul>
            </div>
            <script type="text/javascript">
                var cats = '';
                var admin_base_url = "#";
            </script>



            <div class="row">
                <div class="col-lg-12">


                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5></h5>
                        </div>

                        <div class="ibox-content">
            <form method="post" class="form-horizontal product_form" 
            action="addAppointment_available.php?email=<?php echo $dataofadmin['email']; ?>"
                                enctype='multipart/form-data'>

                                <div class="form-group"><label class="col-sm-2 control-label">What is the
                                        service?</label>
                                    <div class="col-sm-10">

                                        <input type="radio" name="type" value="Checkup" required> <label
                                            for="Checkup">Pet Checkup</label> <br>
                                        <input type="radio" name="type" value="Grooming" required> <label
                                            for="Grooming">Pet Grooming</label> <br>
                                        <input type="radio" name="type" value="Board" required> <label
                                            for="Board">Pet Boarding</label> <br>

                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control" name="date" id="adate" required
                                             />
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Time</label>
                                    <div class="col-sm-2">
                                        <div class="input-group clockpicker">
                                            <input type="text" name="time" class="form-control"
                                                >
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-2">
                                        <!-- <a class="btn btn-white" href="#">Cancel</a> -->
                                        <button class="btn btn-primary" type="submit" name="submit" value="submit">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <div id="sampleFull"
            style="z-index: 999999; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%;display:none;">
            <div id="sampleBg"
                style="overflow: hidden; background-color: rgba(0,0,0,0.7); position: absolute; top: 0px; left: 0px; height: 100%; width: 100%;">
                <img src="../assets/images/ring.gif" class="loaderImg">
            </div>
            <div id="sampleLoading" class="sampleLoading"
                style="position: absolute; top: 28%; left: 50%; margin-top: -79px; margin-left: -79px; display: block; opacity: 1;">
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">

            </div>
            <div>
                <strong>&copy;</strong> 2021-
                <?php echo date('Y'); ?>
            </div>
        </div>
    </div><!-- #page-wrapper end here -->
    </div><!-- #wrapper end here -->

    
</body>

<?php 

$con = mysqli_connect("localhost","root","","petcare2");

if(isset($_POST['submit'])){
    
    $type = $_POST['type'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    
    $query = "INSERT INTO appointment_availables (type, date, time) 
    VALUES ('$type', '$date' , '$time')";
                                                                                                        //if we have no username and pass in the data base then redirect to the current page  
    
    if(mysqli_query($con, $query)){
        
    
        ?>
        <script>
            
    
            alert('you have successfully added the availables appointment !!');
            window.open('addAppointment_available.php?email=<?php echo $dataofadmin['email']; ?>' , '_self');
            </script>
        
        
        <?php
           

       
        
  }
    else {
        
        ?>
        <script>
            alert('false data !!');
            window.opener('login.php','_self');

       </script>
        
        
        <?php
    }
               
}

?>

</html>