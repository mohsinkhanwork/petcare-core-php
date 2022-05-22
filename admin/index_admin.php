<?php require('../dbconfig.php');

$email = $_GET['email'];
$sql = "SELECT * FROM admin WHERE email='$email' ";
$run=mysqli_query($con,$sql);
$dataofadmin = mysqli_fetch_assoc($run);


      ?>

<!DOCTYPE html>
<html>

<head>

    <title>Admin pet care</title>

    <link href="../assets/css/customecss.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    


</head>

<body>
    <div id="wrapper">

          <!-- /// -->

       <?php

include('nav.php')

    ?>

<!-- // nav bar end -->
        <div id="page-wrapper" class="gray-bg" style="min-height: 382px; height: 900px !important;">
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
          



            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->



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

    
    <style type="text/css">
        .select2-container--default .select2-selection--single,
        .select2-selection .select2-selection--single {

            border: 1px solid #d2d6de;
            border-radius: 0;
            padding: 6px 12px;
            height: 38px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 22px;
        }

        .select2-selection__arrow {
            top: 6px !important;
        }

        .collapse-arrow:before {
            font-family: 'Glyphicons Halflings';
            content: "\e114";
            float: right;
            transition: all 0.5s;
            margin-left: 15px;
            margin-top: 3px;
        }

        .collapse-arrow.active:before {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    </style>
</body>

</html>