<?php require('../dbconfig.php');

$email = $_GET['email'];
$sql = "SELECT * FROM admin WHERE email='$email' ";
$run=mysqli_query($con,$sql);
$dataofadmin = mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html>
<?php

include('header.php')

?>
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
                            <h5>Pet Request</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>bread</th>
                                            <th>Date of Birth</th>
                                            <th>Image</th>
                                            <th>Gender</th>
                                            <th>Type</th>
                                            <th>Medical Description</th>
                                            <th>Vaccination Description</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                          
                           
                            $sql = "SELECT * FROM pets ";


                            $res = mysqli_query($con,$sql);

                            if($result = mysqli_query($con, $sql)){
                            if(mysqli_num_rows($res) > 0){
                                $count=0;

                             while($data = mysqli_fetch_assoc($res)){
                                $count++;
                                  ?>

                                        <tr>
                                        <th><?php echo $count; ?></th>
                            <th><?php echo $data['name']; ?></th>
                            <th><img src=../pets/<?php echo $data['image']; ?> width="100px" height="100px"></th>
                            <th><?php echo $data['bread']; ?></th>
                            <th><?php echo $data['birth_date']; ?></th>
                            <th><?php echo $data['gender']; ?></th>
                            <th><?php echo $data['neutered']; ?></th>
                            <th><?php echo $data['medical_description']; ?></th>
                            <th><?php echo $data['vaccination_description']; ?></th>
                            <th> <a href="updatepet.php?id=<?php echo $data['id']; ?>"> <img class="edit-icon" src="img/pencil.png" alt=""> </a>
                            </th>

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
                    <img src="assets/images/ring.gif" class="loaderImg">
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