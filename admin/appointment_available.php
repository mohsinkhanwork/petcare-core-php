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
                            <a href="#">
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



            <div class="row mtop15">
                <div class="col-lg-12">

                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Services</h5>
                            <div class="col-md-2 pull-right">
                                <a class="btn btn-primary btn-sm right_btn" 
                                href="addAppointment_available.php?email=<?php echo $dataofadmin['email']; ?>">
                                    Add appoiontment</a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    <?php 
                          
                           
                          $sql = "SELECT * FROM appointment_availables ";


                          $res = mysqli_query($con,$sql);

                          if($result = mysqli_query($con, $sql)){
                          if(mysqli_num_rows($res) > 0){
                              $count=0;

                           while($data = mysqli_fetch_assoc($res)){
                              $count++;
                                ?>
                                        <tr>
                                            <td><?php echo $data['type']; ?></td>
                                            <td><?php echo $data['date']; ?></td>
                                            <td><?php echo $data['time']; ?></td>
                                            <td>
                                                <a href="#">Edit</a> |
                                                <a href="#">Delete</a>
                                            </td>
                                        </tr>


                                        <?php
}
} 
} ?>
                                    </tbody>
                                </table>
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

</html>