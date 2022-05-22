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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body data-new-gr-c-s-check-loaded="14.1062.0" data-gr-ext-installed="" style="background-color: #f3f3f4;">
  <div style="width: 300px;max-width: 400px;
    z-index: 100;
    margin: 0 auto;
    /* padding-top: 40px; */">
    <div>

      <div style="margin-top:250px"></div>
      <h2 style="font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;text-align: center;">Log in</h2>
      <form action="login_admin.php" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
        <div style="margin-bottom: 15px;">
          <input type="email" name="email" placeholder="Email" required autofocus style="border: 1px solid #e5e6e7;
    border-radius: 1px;
    color: inherit;
    display: block;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    font-size: 14px;">
        </div>
        <div style="margin-bottom: 15px;">
          <input type="password" name="password" placeholder="Password" required style="border: 1px solid #e5e6e7;
    border-radius: 1px;
    color: inherit;
    display: block;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    font-size: 14px;">
        </div>
        <button type="submit" name="submit" value="submit" style="background-color: #1ab394;
    border-color: #1ab394;
    color: #FFFFFF;display: block !important;width: 100% !important;margin-bottom: 15px;">Login</button>
        <a href="#"><small>Forgot password?</small></a>
      </form>
    </div>
  </div>
 

</body>

<?php 

$con = mysqli_connect("localhost","root","","petcare2");

if(isset($_POST['submit'])){
    
$email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = mysqli_query($con, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");

    
    if(mysqli_num_rows($query) >0 ){
        ?>
        <script>
            alert('you have successfully logged in as admin !!');
            // location.href = 'pet.php';
            window.open('index_admin.php?email=<?php echo $email; ?>' , '_self');
       

       </script>
        
        
        <?php
        
  }
    else {
        
        ?>
        <script>
            alert('username and password does not matches !');
            window.opener('login_admin.php','_self');

       </script>
        
        
        <?php
    }
               
}

?>





</html>