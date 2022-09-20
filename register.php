<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<!-- Specific Page Data -->
<?php

include 'config.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = md5($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = md5($_POST['cpass']);
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_folder = 'uploaded_img/' . $image;

    $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select->execute([$email]);

    if ($select->rowCount() > 0) {
        $message[] = 'Cet utilisateur existe déjà!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirmation du mot de passe non valide!';
        } elseif ($image_size > 2000000) {
            $message[] = 'La taille de l_image est trop grande!';
        } else {
            $insert = $conn->prepare("INSERT INTO `users`(name, email, password, image) VALUES(?,?,?,?)");
            $insert->execute([$name, $email, $cpass, $image]);
            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'Inscription réussie!';
                header('location:index.php');
            }
        }
    }
}

?>
<!-- End of Data -->


<!-- Mirrored from www.venmond.com/demo/vendroid/pages-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2017 07:27:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>Register Pages HTML Template - Responsive Multipurpose Admin Templates | Vendroid</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Register Pages - Responsive Admin HTML Template">
    <meta name="author" content="Venmond">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">


    <!-- CSS -->

    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    <link href="css/font-entypo.css" rel="stylesheet" type="text/css">

    <!-- Fonts CSS -->
    <link href="css/fonts.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">
    <link href="plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">


    <link href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">

    <!-- Specific CSS -->


    <!-- Theme CSS -->
    <link href="css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->



    <!-- Responsive CSS -->
    <link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css">




    <!-- for specific page in style css -->

    <!-- for specific page responsive in style css -->


    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/mobile-detect.min.js"></script>
    <script type="text/javascript" src="js/mobile-detect-modernizr.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->

</head>

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages " data-smooth-scrolling="1">
    <div class="vd_body">
        <!-- Header Start -->

        <!-- Header Ends -->
        <div class="content">
            <div class="container">

                <!-- Middle Content Start -->

                <div class="vd_content-wrapper">
                    <div class="vd_container">
                        <div class="vd_content clearfix">
                            <div class="vd_content-section clearfix">
                                <div class="vd_register-page">
                                    <div class="heading clearfix">
                                        <div class="logo">
                                            <h2 class="mgbt-xs-5"><img src="img/logo1.png" alt="logo"></h2>
                                        </div>
                                        <h4 class="text-center font-semibold vd_grey">INSCRIPTION</h4>
                                    </div>
                                    <div class="panel widget">
                                        <?php
                                        if (isset($message)) {
                                            foreach ($message as $message) {
                                                echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
                                            }
                                        }
                                        ?>
                                        <div class="panel-body">
                                            <!--                  <div id="register-success" class="alert alert-success" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Registration confirmation has been sent to your email </div>
                  <div id="register-passerror" class="alert alert-danger" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Your password and Confirm password are not same </div>-->
                                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="register-form">
                                                
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="label-wrapper">
                                                                    <label class="control-label">Nom d'utilisateur <span class="vd_red">*</span></label>
                                                                </div>
                                                                <div class="vd_input-wrapper" id="first-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                                                                    <input type="text" placeholder="Votre nom d'utilisateur" class="required" required name="name" name="name" id="firstname">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="label-wrapper">
                                                                    <label class="control-label">Email <span class="vd_red">*</span></label>
                                                                </div>
                                                                <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                                                                    <input type="email" placeholder="Email" class="required" required name="email" id="email">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <div class="label-wrapper">
                                                                    <label class="control-label">Mot de Passe <span class="vd_red">*</span></label>
                                                                </div>
                                                                <div class="vd_input-wrapper" id="password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                                                                    <input type="password" placeholder="Password" class="required" required name="pass" id="password">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="label-wrapper">
                                                                    <label class="control-label">Confirmer Mot de Passe <span class="vd_red">*</span></label>
                                                                </div>
                                                                <div class="vd_input-wrapper" id="confirm-password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                                                                    <input type="password" placeholder="Password" class="required" required name="cpass" id="confirmpass">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="label-wrapper">
                                                                    <label class="control-label">Votre photo <span class="vd_red">*</span></label>
                                                                </div>
                                                                <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                                                                    <input type="file" name="image" required class="box" accept="image/jpg, image/png, image/jpeg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Vous devez remplir tous les champs </div>
                                                        <div class="form-group">
                                                            <div class="col-md-12 text-center mgbt-xs-5">
                                                                <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-register" name="submit">Register</button>
                                                            </div>
                                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Panel Widget -->
                                    <div class="register-panel text-center font-semibold"> Déja inscrit ? <br />
                                        <a href="index.php">Se connecter<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a>
                                    </div>
                                </div>
                                <!-- vd_login-page -->

                            </div>
                            <!-- .vd_content-section -->

                        </div>
                        <!-- .vd_content -->
                    </div>
                    <!-- .vd_container -->
                </div>
                <!-- .vd_content-wrapper -->

                <!-- Middle Content End -->

            </div>
            <!-- .container -->
        </div>
        <!-- .content -->

        <!-- Footer Start -->
        <footer class="footer-2" id="footer">
            <div class="vd_bottom ">
                <div class="container">
                    <div class="row">
                        <div class=" col-xs-12">
                            <div class="copyright text-center">
                                Copyright &copy;2014 Venmond Inc. All Rights Reserved
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </div>
        </footer>
        <!-- Footer END -->

    </div>

    <!-- .vd_body END  -->
    <a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
    <!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

    <!-- Javascript =============================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
    <script type="text/javascript" src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <script type="text/javascript" src="js/caroufredsel.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

    <script type="text/javascript" src="plugins/breakpoints/breakpoints.js"></script>
    <script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script>

    <script type="text/javascript" src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="plugins/tagsInput/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="plugins/blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript" src="plugins/pnotify/js/jquery.pnotify.min.js"></script>

    <script type="text/javascript" src="js/theme.js"></script>
    <script type="text/javascript" src="custom/custom.js"></script>

    <!-- Specific Page Scripts Put Here -->

    <!-- Specific Page Scripts END -->




    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXX-X']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

</body>

<!-- Mirrored from www.venmond.com/demo/vendroid/pages-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2017 07:27:32 GMT -->

</html>