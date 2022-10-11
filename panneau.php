<?php

include 'sessionstart.php';
include 'requete.php';



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
                                                    <span class="mega-name"> <?= $fetch_profile['name']; ?>
                                                    </span>
                                                </a>
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

                                    <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5 data-position="left">
                                        <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
                                        <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
                                        <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>

                                    </div>

                                </div>
                            </div>
                            <div class="vd_title-section clearfix">
                                <div class="vd_panel-header">
                                    <h1>Panneaux</h1>

                                </div>
                            </div>
                            <div class="vd_content-section clearfix">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="panel widget">
                                            <div class="panel-heading vd_bg-grey">
                                                <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-bar-chart-o"></i> </span> Ajouter un panneau </h3>
                                            </div>
                                            <div class="panel-body">
                                                <form class="form-horizontal" method="POST" action="add.php">

                                                    <div class="form-group">
                                                        <label class="col-12 control-label">Type de panneau</label>
                                                        <div class="col-12 controls">
                                                            <select name="type_panneau">
                                                                <option value="mono_crystalin">Mono Crytalin</option>
                                                                <option value="poly_crytalin">Poly Crytalin</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-12 control-label">Tension</label>
                                                        <div class="col-12 controls">
                                                            
                                                            <input type="number" min="0" name="tension_panneau">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-12 control-label">Puissance</label>
                                                        <div class="col-12 controls">
                                                            <input type="number" min="0" name="puissance_panneau">
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-actions">
                                                        <div class="col-12">
                                                            <button class="btn vd_btn vd_bg-green vd_white" type="submit" name="savepanneau"><i class="icon-ok"></i> Valider</button>
                                                            <button class="btn vd_btn" type="button">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="panel widget">
                                            <div class="panel-heading vd_bg-grey">
                                                <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> Liste des panneaux </h3>
                                            </div>
                                            <div class="panel-body table-responsive">
                                                <table class="table table-striped" id="data-tables">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Type de Panneau</th>
                                                            <th>Tension</th>
                                                            <th>Puissance</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = $conn->prepare("SELECT * FROM `panneau`");
                                                        $sql->execute();
                                                        while ($fetch = $sql->fetch()) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $fetch['panneau_id'] ?></td>
                                                                <td><?php echo $fetch['type_panneau'] ?></td>
                                                                <td><?php echo $fetch['tension_panneau'] ?> V</td>
                                                                <td><?php echo $fetch['puissance_panneau'] ?> Kw</td>
                                                                <td class="menu-action">
                                                                    <a href="edit_panneau.php?id=<?php echo $fetch['panneau_id'] ?>">
                                                                        <button class="btn menu-icon vd_bd-yellow vd_yellow"> <i class="fa fa-pencil"></i>
                                                                        </button>
                                                                    </a>
                                                                    <a href="page/delete/delete_panneau.php?id=<?php echo $fetch['panneau_id'] ?>" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"> <i class="fa fa-times"></i> </a>
                                                                </td>
                                                            </tr>


                                                    </tbody>
                                                <?php } ?>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Panel Widget -->
                                    </div>
                                    <!-- col-md-12 -->
                                </div>
                            </div>

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

    <script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="plugins/dataTables/dataTables.bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            "use strict";

            $('#data-tables').dataTable();
        });
    </script>


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