<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:index.php');
};

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $update_profile = $conn->prepare("UPDATE `users` SET name = ?, email = ? WHERE id = ?");
    $update_profile->execute([$name, $email, $user_id]);

    $old_image = $_POST['old_image'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_folder = 'uploaded_img/' . $image;

    if (!empty($image)) {

        if ($image_size > 2000000) {
            $message[] = 'image size is too large';
        } else {
            $update_image = $conn->prepare("UPDATE `users` SET image = ? WHERE id = ?");
            $update_image->execute([$image, $user_id]);

            if ($update_image) {
                move_uploaded_file($image_tmp_name, $image_folder);
                unlink('uploaded_img/' . $old_image);
                $message[] = 'image has been updated!';
            }
        }
    }

    $old_pass = $_POST['old_pass'];
    $previous_pass = md5($_POST['previous_pass']);
    $previous_pass = filter_var($previous_pass, FILTER_SANITIZE_STRING);
    $new_pass = md5($_POST['new_pass']);
    $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
    $confirm_pass = md5($_POST['confirm_pass']);
    $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

    if (!empty($previous_pass) || !empty($new_pass) || !empty($confirm_pass)) {
        if ($previous_pass != $old_pass) {
            $message[] = 'old password not matched!';
        } elseif ($new_pass != $confirm_pass) {
            $message[] = 'confirm password not matched!';
        } else {
            $update_password = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
            $update_password->execute([$confirm_pass, $user_id]);
            $message[] = 'password has been updated!';
        }
    }
}

?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include 'head.php';
?>

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="dashboard " data-smooth-scrolling="1">
    <div class="vd_body">


        <!-- Header Start -->
        <header class="header-1" id="header">
            <div class="vd_top-menu-wrapper">
                <div class="container ">
                    <div class="vd_top-nav vd_nav-width  ">
                        <div class="vd_panel-header">
                            <div class="logo">
                                <a href=""><img alt="logo" src="img/logo.png"></a>
                            </div>
                            <!-- logo -->
                            <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
                                <span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
                                    <i class="fa fa-bars"></i>
                                </span>

                                <span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
                                    <i class="fa fa-ellipsis-v"></i>
                                </span>

                            </div>
                            <div class="vd_panel-menu left-pos visible-sm visible-xs">

                                <span class="menu" data-action="toggle-navbar-left">
                                    <i class="fa fa-bars"></i>
                                </span>


                            </div>
                            <!-- <div class="vd_panel-menu visible-sm visible-xs">
                	<span class="menu visible-xs" data-action="submenu">
	                    <i class="fa fa-bars"></i>
                    </span>        
                          
                        <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                            <i class="fa fa-comments"></i>
                        </span>                   
                   	 
            </div>       -->
                            <!-- vd_panel-menu -->
                        </div>
                        <!-- vd_panel-header -->

                    </div>
                    <div class="vd_container">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">
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
                                <?php
                                $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                                $select_profile->execute([$user_id]);
                                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                                ?>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div class="vd_mega-menu-wrapper">
                                    <div class="vd_mega-menu pull-right">
                                        <ul class="mega-ul">

                                            <li id="top-menu-profile" class="profile mega-li">
                                                <a href="#" class="mega-link" data-action="click-trigger">
                                                    <span class="mega-image">
                                                        <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
                                                    </span>
                                                    <span class="mega-name"> <?= $fetch_profile['name']; ?> <i class="fa fa-caret-down fa-fw"></i>
                                                    </span>
                                                </a>
                                                <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
                                                    <div class="child-menu">
                                                        <div class="content-list content-menu">
                                                            <ul class="list-wrapper pd-lr-10">
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                                        <div class="menu-text">Voir le profil</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-trophy"></i></div>
                                                                        <div class="menu-text">Editer le profil</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>
                                                                        <div class="menu-text">Se déconnecter</div>
                                                                    </a> </li>
                                                                <li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                        <!-- Head menu search form ends -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- vd_primary-menu-wrapper -->

        </header>
        <!-- Header Ends -->
        <div class="content">
            <div class="container">
                <?php
                include 'nav.php';
                ?>
                <!-- Middle Content Start -->

                <div class="vd_content-wrapper">
                    <div class="vd_container">
                        <div class="vd_content clearfix">
                            <div class="vd_head-section clearfix">
                                <div class="vd_panel-header">
                                    <ul class="breadcrumb">
                                        <li><a href="">Mr</a> </li>
                                        <li class="active">Nom du user connecter</li>
                                    </ul>
                                    <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5 data-position="left">
                                        <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
                                        <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
                                        <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>

                                    </div>

                                </div>
                            </div>
                            <div class="vd_title-section clearfix">
                                <div class="vd_panel-header no-subtitle">
                                    <h1>User Profile Page</h1>
                                </div>
                            </div>
                            <div class="vd_content-section clearfix">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel widget light-widget">
                                            <div class="panel-heading no-title"> </div>
                                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                                <div class="panel-body">
                                                    <h2 class="mgbt-xs-20"> Profile: <span class="font-semibold"><?= $fetch_profile['name']; ?>
                                                        </span> </h2>
                                                    <br />
                                                    <div class="row">
                                                        <div class="col-sm-3 mgbt-xs-20">
                                                            <div class="form-group">
                                                                <div class="col-xs-12">
                                                                    <div class="form-img text-center mgbt-xs-15"> <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt=""> </div>
                                                                    <input type="hidden" name="old_image" value="<?= $fetch_profile['image']; ?>">
                                                                    <div class="form-img-action text-center mgbt-xs-20">
                                                                        <input class="btn vd_btn  vd_bg-blue" type="file" name="image" accept="image/jpg, image/jpeg, image/png">

                                                                    </div>
                                                                    <br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <h3 class="mgbt-xs-15">Paramètre du compte</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Email</label>
                                                                <div class="col-sm-9 controls">
                                                                    <div class="row mgbt-xs-0">
                                                                        <div class="col-xs-9">
                                                                            <input type="email" name="email" required class="box" placeholder="enter your email" value="<?= $fetch_profile['email']; ?>">
                                                                        </div>
                                                                        <!-- col-xs-12 -->

                                                                    </div>
                                                                    <!-- row -->
                                                                </div>
                                                                <!-- col-sm-10 -->
                                                            </div>
                                                            <!-- form-group -->

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Nom</label>
                                                                <div class="col-sm-9 controls">
                                                                    <div class="row mgbt-xs-0">
                                                                        <div class="col-xs-9">
                                                                            <input type="text" name="name" required class="box" placeholder="enter your name" value="<?= $fetch_profile['name']; ?>">
                                                                        </div>
                                                                        <!-- col-xs-9 -->

                                                                    </div>
                                                                    <!-- row -->
                                                                </div>
                                                                <!-- col-sm-10 -->
                                                            </div>
                                                            <!-- form-group -->

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Password</label>
                                                                <div class="col-sm-9 controls">
                                                                    <div class="row mgbt-xs-0">
                                                                        <div class="col-xs-9">
                                                                            <input type="hidden" name="old_pass" value="<?= $fetch_profile['password']; ?>">
                                                                            <input type="password" name="previous_pass" placeholder="enter votre ancien">
                                                                        </div>
                                                                        <!-- col-xs-12 -->
                                                                    </div>
                                                                    <!-- row -->
                                                                </div>
                                                                <!-- col-sm-10 -->
                                                            </div>
                                                            <!-- form-group -->

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Nouveau mot de passe</label>
                                                                <div class="col-sm-9 controls">
                                                                    <div class="row mgbt-xs-0">
                                                                        <div class="col-xs-9">
                                                                            <input type="password" class="box" name="new_pass" placeholder="entrer nouveau mot de pass">

                                                                        </div>
                                                                        <!-- col-xs-12 -->
                                                                    </div>
                                                                    <!-- row -->
                                                                </div>
                                                                <!-- col-sm-10 -->
                                                            </div>
                                                            <!-- form-g
                                                            roup -->

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Confirmer mot de passe</label>
                                                                <div class="col-sm-9 controls">
                                                                    <div class="row mgbt-xs-0">
                                                                        <div class="col-xs-9">
                                                                            <input type="password" name="confirm_pass" placeholder="confirmer nouveau mot de passe">
                                                                        </div>
                                                                        <!-- col-xs-12 -->
                                                                    </div>
                                                                    <!-- row -->
                                                                </div>
                                                                <!-- col-sm-10 -->
                                                            </div>

                                                            <hr />

                                                            <!-- form-group -->

                                                        </div>
                                                        <!-- col-sm-12 -->
                                                    </div>
                                                    <!-- row -->

                                                </div>
                                                <!-- panel-body -->
                                                <div class="pd-20">
                                                    <input type="submit" value="Mettre à jour" name="update" class="btn btn-primary" style="width: 100%;">
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Panel Widget -->
                                    </div>
                                    <!-- col-sm-12-->
                                </div>
                                <!-- row -->

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
    <!-- Flot Chart  -->
    <script type="text/javascript" src="plugins/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.pie.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.categories.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.animator.min.js"></script>

    <!-- Vector Map -->
    <script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Calendar -->
    <script type="text/javascript" src='plugins/moment/moment.min.js'></script>
    <script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
    <script type="text/javascript" src='plugins/fullcalendar/fullcalendar.min.js'></script>

    <!-- Intro JS (Tour) -->
    <script type="text/javascript" src='plugins/introjs/js/intro.min.js'></script>

    <!-- Sky Icons -->
    <script type="text/javascript" src='plugins/skycons/skycons.js'></script>


    <?php
        include 'jsinclude.php';
    ?>
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

<!-- Mirrored from www.venmond.com/demo/vendroid/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2017 07:20:57 GMT -->

</html>