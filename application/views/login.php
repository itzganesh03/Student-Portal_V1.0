<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

    <title>DYPIU Student | Login</title>

    <link href="extra/css/bootstrap.min.css" rel="stylesheet">
    <link href="extrafont-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="extra/css/animate.css" rel="stylesheet">
    <link href="extra/css/style.css" rel="stylesheet">

    <!--<link href="<?php echo base_url(); ?>assets/css2/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css2/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css2/style.css" rel="stylesheet">-->

</head>
<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">DYPIU</h1>

            </div>

            
           <h3>Welcome to Student Portal</h3>
            <p>Perfectly designed By Students.
                <!--Continually expanded and constantly improved -->
            </p>
            <p>Login in. To see it in action.</p>
            <?php if(!empty($this->session->flashdata('feedback'))){ ?>
                            <div class="message">
                            <strong>Danger! </strong>
                            <?php echo $this->session->flashdata('feedback')?>
                            </div>
                            <?php
                            }
                            ?>        
            <form method="post" id="loginform" action = "login/Login_Auth">

                <div class="form-group">
                     <input class="form-control" name="email" value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?>" 
                     type="text" required placeholder="Username">
                </div>

                <div class="form-group">
                     <input class="form-control" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" type="password" required placeholder="Password">
                </div>
                <div class="form-check">
                     <input type="checkbox" name="remember" class="form-check-input" id="remember-me">
                     <label class="form-check-label" for="remember-me">Remember me plz!</label>
                 </div> 
                 <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">           
                 <button class="btn btn-info btn-lg btn-login btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
             </div>
            </form>


            <p class="m-t"> <medium><B>Copyright © 2020-<?php echo date("Y");  ?> Team <!--for emoji in footer script--><span style='font-size:15px;'>&#127775 &#128640 &#128187;                           </span><br>Start-tech Ganesh Modi </br>Design thinking-Project.</br>All rights reserved.</br></medium></p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="extra/js/jquery-3.1.1.min.js"></script>
    <script src="extra/js/popper.min.js"></script>
    <script src="extra/js/bootstrap.js"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>

</html>

