<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>

  


    .login-form-3 .btnSubmit {
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}

.login-form-3 h3 {
    text-align: center;
    color: #fff;
}

.login-form-1 h3 {
    text-align: center;
    color: #fff;
}
.login-form-3 {
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}

    </style>
<body style="font-family: Arial, sans-serif;">

<?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>
 <div id="image-container" style = "width = 20px;   text-align: center;">
    <img src="images/logo.png" alt="Example Image" width= 200px>
</div>
    <div class="container login-container" style="width: 100%; margin-top: 10; padding: 20px;">
        <div class="row" style="margin-bottom: 20px;">
            <h4><?php echo $msg?></h4>
        </div>
        <div class="row" >
            <div class="col-md-6 login-form-3" style="background-color: #f3f3f3; padding: 20px; border-radius: 5px;">
                <h3 style = "color: black;">Admin Login</h3>
                <form action="loginadmin_server_page.php" method="get">
                    <div class="form-group" style="margin-bottom: 20px;">
                        <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px;" />
                        <label class="error-msg" style="color: red; font-size: 12px;"><?php echo $ademailmsg?></label>
                    </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px;" />
                        <label class="error-msg" style="color: red; font-size: 12px;"><?php echo $adpasdmsg?></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 3px; cursor: pointer;" />
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-1" style="background-color: blue; padding: 20px; border-radius: 5px;">
                <h3 style= "color: white;">Student Login</h3>
                <form action="login_server_page.php" method="get">
                    <div class="form-group" style="margin-bottom: 20px;">
                        <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px;" />
                        <label class="error-msg" style="color: red; font-size: 12px;"><?php echo $emailmsg?></label>
                    </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px;" />
                        <label class="error-msg" style="color: red; font-size: 12px;"><?php echo $pasdmsg?></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 3px; cursor: pointer;" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="" async defer></script>
</body>
</html>