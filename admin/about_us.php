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
           
<?php

$sql = "SELECT * FROM pages WHERE id=2 ";
$run=mysqli_query($con,$sql);
$dataofpages = mysqli_fetch_assoc($run);

?>


            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>About Info</h5>
                        </div>

                        <div class="ibox-content">

                        
   <form method="post" class="form-horizontal product_form" action="about_us.php?email=<?php echo $dataofadmin['email']; ?>" 
   enctype='multipart/form-data' onsubmit="return validate();">

    <div class="form-group"><label class="col-sm-2 control-label">About Description</label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" name="page_content" rows="10" maxlength="500" style="height: auto;background-color: #FFFFFF;
    background-image: none;
    border: 1px solid #e5e6e7;
    border-radius: 1px;
    color: inherit;
    display: block;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    font-size: 14px;"><?php echo $dataofpages['page_content']; ?>
                                            </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Company Office</label>
                                    <div class="col-sm-4">
                                        <input name="image" type="file" />
                                    </div>
                                    <div class="col-sm-2">

                                        <img src=aboutusimages/<?php echo $dataofpages['image']; ?> width="100px" height="100px" />

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit" name="submit" value="submit">
                                            Update
                                        </button>
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

<?php 

$con = mysqli_connect("localhost","root","","petcare2");

if(isset($_POST['submit'])){
    
    $page_content = $_POST['page_content'];
    $imagename = $_FILES['image']['name'];                      //first to use the name of image
    $tempname = $_FILES['image']['tmp_name'];               //temperory name in servers  

    move_uploaded_file($tempname,"aboutusimages/$imagename");
    
    $query = "UPDATE pages SET 
                page_content = '$page_content', image = '$imagename'
    
                WHERE id = 2; ";
                                                                                                        //if we have no username and pass in the data base then redirect to the current page  
    $run = mysqli_query($con, $query); 
    if($run){
        
    
        ?>
        <script>
            
    
            alert('you have successfully updated the the about us information !!');
            window.open('about_us.php?email=<?php echo $dataofadmin['email']; ?>' , '_self');
            </script>
        
        
        <?php
           

       
        
  }
    else {
        
        ?>
        <script>
            alert('falsie data!!');
            window.opener('login.php','_self');

       </script>
        
        
        <?php
    }
               
}

?>




</html>