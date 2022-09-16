<?php

include 'sessionstart.php';
include 'requete.php';



?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>devis</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, " />
    <meta name="description" content="Responsive Admin Template for multipurpose use">
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
    <link href="plugins/dataTables/css/jquery.dataTables.html" rel="stylesheet" type="text/css">
    <link href="plugins/dataTables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
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
    <link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css">
    <link href="plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css">
    <link href="plugins/introjs/css/introjs.min.css" rel="stylesheet" type="text/css">

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
                                                    <span class="mega-name"> <?= $fetch_profile['name']; ?> <i class="fa fa-caret-down fa-fw"></i>
                                                    </span>
                                                </a>
                                                <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
                                                    <div class="child-menu">
                                                        <div class="content-list content-menu">
                                                            <ul class="list-wrapper pd-lr-10">
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                                        <div class="menu-text">Edit Profile</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-trophy"></i></div>
                                                                        <div class="menu-text">My Achievements</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                                        <div class="menu-text">Messages</div>
                                                                        <div class="menu-badge">
                                                                            <div class="badge vd_bg-red">10</div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-tasks
                                                                                "></i></div>
                                                                        <div class="menu-text"> Tasks</div>
                                                                        <div class="menu-badge">
                                                                            <div class="badge vd_bg-red">5</div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li class="line"></li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-lock
                                                                                "></i></div>
                                                                        <div class="menu-text">Privacy</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-cogs"></i></div>
                                                                        <div class="menu-text">Settings</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class="  fa fa-key"></i></div>
                                                                        <div class="menu-text">Lock</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>
                                                                        <div class="menu-text">Sign Out</div>
                                                                    </a> </li>
                                                                <li class="line"></li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-question-circle"></i>
                                                                        </div>
                                                                        <div class="menu-text">Help</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" glyphicon glyphicon-bullhorn"></i>
                                                                        </div>
                                                                        <div class="menu-text">Report a Problem</div>
                                                                    </a> </li>
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
                <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
                    <div class="navbar-menu clearfix">
                        <div class="vd_panel-menu hidden-xs">
                            <span data-original-title="Expand All" data-toggle="tooltip" data-placement="bottom" data-action="expand-all" class="menu" data-intro="<strong>Expand Button</strong><br/>To expand all menu on left navigation menu." data-step=4>
                                <i class="fa fa-sort-amount-asc"></i>
                            </span>
                        </div>
                        <h3 class="menu-title hide-nav-medium hide-nav-small">MENU</h3>
                        <div class="vd_menu">
                            <ul>
                                <li>
                                    <a href="acceuil.php">
                                        <span class="menu-icon"><i class="fa fa-code"></i></span>
                                        <span class="menu-text">Acceuil</span>
                                        <span class="menu-badge"><span class="badge vd_bg-yellow"><i class="fa fa-star"></i></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-action="click-trigger">
                                        <span class="menu-icon"><i class="fa fa-dashboard"></i></span>
                                        <span class="menu-text">DEVIS</span>
                                        <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
                                    </a>
                                    <div class="child-menu" data-action="click-target">
                                        <ul>
                                            <li>
                                                <a href="creer-devis.php">
                                                    <span class="menu-text">Créer un devis</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="liste-devis.php">
                                                    <span class="menu-text">Liste des devis</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="javascript:void(0);" data-action="click-trigger">
                                        <span class="menu-icon"><i class="icon-palette"> </i></span>
                                        <span class="menu-text">onduleur & Onduleur</span>
                                        <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
                                    </a>
                                    <div class="child-menu" data-action="click-target">
                                        <ul>
                                            <li>
                                                <a href="panneau.php">
                                                    <span class="menu-text">panneau</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="onduleur.php">
                                                    <span class="menu-text">Onduleur</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="profile.php">
                                        <span class="menu-icon"><i class="fa fa-code"></i></span>
                                        <span class="menu-text">Profil</span>
                                        <span class="menu-badge"><span class="badge vd_bg-yellow"><i class="fa fa-star"></i></span></span>
                                    </a>
                                </li>

                            </ul>
                            <!-- Head menu search form ends -->
                        </div>
                    </div>
                    <div class="navbar-spacing clearfix">
                    </div>
                    <div class="vd_menu vd_navbar-bottom-widget">
                        <ul>
                            <li>
                                <a href="logout.php">
                                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>
                                    <span class="menu-text">Déconnection</span>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
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
                                    <h1>Onduleur</h1>

                                </div>
                            </div>
                            <div class="vd_content-section clearfix">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="panel widget">
                                            <div class="panel-heading vd_bg-grey">
                                                <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-bar-chart-o"></i> </span> Ajouter un onduleur </h3>
                                            </div>
                                            <div class="panel-body">
                                                <form class="form-horizontal" method="POST" action="add.php">

                                                    <div class="form-group">
                                                        <label class="col-12 control-label">Puissance</label>
                                                        <div class="col-12 controls">
                                                            <select name="puissance_onduleur">
                                                                <option value="100">100 Kw</option>
                                                                <option value="200">200 Kw</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-12 control-label">Tension</label>
                                                        <div class="col-12 controls">
                                                            <select name="tension_onduleur">
                                                                <option value="10">10V</option>
                                                                <option value="300">300V</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-actions">
                                                        <div class="col-12">
                                                            <button class="btn vd_btn vd_bg-green vd_white" type="submit" name="saveonduleur"><i class="icon-ok"></i> Valider</button>
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
                                                <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> Data Tables Example </h3>
                                            </div>
                                            <div class="panel-body table-responsive">
                                                <table class="table table-striped" id="data-tables">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Type de onduleur</th>
                                                            <th>Tension</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = $conn->prepare("SELECT * FROM `onduleur`");
                                                        $sql->execute();
                                                        while ($fetch = $sql->fetch()) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $fetch['onduleur_id'] ?></td>
                                                                <td><?php echo $fetch['puissance_onduleur'] ?> Kw</td>
                                                                <td><?php echo $fetch['tension_onduleur'] ?> V</td>
                                                                <td class="menu-action">

                                                                    <a href="edit_onduleur.php?id=<?php echo $fetch['onduleur_id'] ?>">
                                                                        <button class="btn menu-icon vd_bd-yellow vd_yellow" data-toggle="modal" data-target="#update_onduleur<?php echo $fetch['onduleur_id'] ?>"> <i class="fa fa-pencil"></i> Modifié
                                                                        </button>
                                                                    </a>
                                                                    <a href="page/delete/delete_onduleur.php?id=<?php echo $fetch['onduleur_id'] ?>" data-original-title="delete">
                                                                        <button class="btn menu-icon vd_bd-red vd_red"><i class="fa fa-times"></i> Supprimé </button>
                                                                    </a>
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
        <footer class="footer-1" id="footer">
            <div class="vd_bottom ">
                <div class="container">
                    <div class="row">
                        <div class=" col-xs-12">
                            <div class="copyright">
                                Copyright &copy;2014 Venmond Inc. All Rights Reserved
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </div>
        </footer>

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


    <script type="text/javascript">
        $(window).load(function() {




            $.fn.UseTooltip = function() {
                var previousPoint = null;

                $(this).bind("plothover", function(event, pos, item) {
                    if (item) {
                        if (previousPoint != item.dataIndex) {

                            previousPoint = item.dataIndex;

                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);

                            showTooltip(item.pageX, item.pageY,
                                "<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + Math.round(x) + " NOV 2013 </strong></p>" +
                                "<div style='padding: 0 10px 10px;'>" +
                                "<div>" + item.series.label + ": <strong>" + Math.round(y) + "</strong></div>" +
                                "<div> Profit: <strong>$" + Math.round(y) * 7 + "</strong></div>" +
                                "</div>"
                            );
                        }
                    } else {
                        $("#tooltip").remove();
                        previousPoint = null;
                    }
                });
            };

            function showTooltip(x, y, contents) {
                $('<div id="tooltip">' + contents + '</div>').css({
                    position: 'absolute',
                    display: 'none',
                    top: y + 5,
                    left: x + 20,
                    size: '10',
                    //				'border-top' : '3px solid #1151ab',
                    'background-color': '#111111',
                    color: "#FFFFFF",
                    opacity: 0.85
                }).appendTo("body").fadeIn(200);
            }


            /* REVENUE LINE CHART */

            var d2 = [
                [1, 250],
                [2, 150],
                [3, 50],
                [4, 200],
                [5, 50],
                [6, 150],
                [7, 150],
                [8, 200],
                [9, 100],
                [10, 250],
                [11, 250],
                [12, 200],
                [13, 300]

            ];
            var d1 = [
                [1, 650],
                [2, 550],
                [3, 450],
                [4, 550],
                [5, 350],
                [6, 500],
                [7, 600],
                [8, 450],
                [9, 300],
                [10, 600],
                [11, 400],
                [12, 500],
                [13, 700]

            ];
            var plot = $.plotAnimator($("#revenue-line-chart"), [{
                    label: "Revenue",
                    data: d2,
                    lines: {
                        fill: 0.4,
                        lineWidth: 0,
                    },
                    color: ['#f2be3e']
                }, {
                    data: d1,
                    animator: {
                        steps: 60,
                        duration: 1000,
                        start: 0
                    },
                    lines: {
                        lineWidth: 2
                    },
                    shadowSize: 0,
                    color: '#F85D2C'
                }, {
                    label: "Revenue",
                    data: d1,
                    points: {
                        show: true,
                        fill: true,
                        radius: 6,
                        fillColor: "#F85D2C",
                        lineWidth: 3
                    },
                    color: '#fff',
                    shadowSize: 0
                },
                {
                    label: "Cost",
                    data: d2,
                    points: {
                        show: true,
                        fill: true,
                        radius: 6,
                        fillColor: "#f2be3e",
                        lineWidth: 3
                    },
                    color: '#fff',
                    shadowSize: 0
                }
            ], {
                xaxis: {
                    tickLength: 0,
                    tickDecimals: 0,
                    min: 2,

                    font: {
                        lineHeight: 13,
                        style: "normal",
                        weight: "bold",
                        family: "sans-serif",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                yaxis: {
                    ticks: 3,
                    tickDecimals: 0,
                    tickColor: "#f0f0f0",
                    font: {
                        lineHeight: 13,
                        style: "normal",
                        weight: "bold",
                        family: "sans-serif",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                grid: {
                    backgroundColor: {
                        colors: ["#fff", "#fff"]
                    },
                    borderWidth: 1,
                    borderColor: "#f0f0f0",
                    margin: 0,
                    minBorderMargin: 0,
                    labelMargin: 20,
                    hoverable: true,
                    clickable: true,
                    mouseActiveRadius: 6
                },
                legend: {
                    show: false
                }
            });

            $("#revenue-line-chart").UseTooltip();

            $(window).on("resize", function() {
                plot.resize();
                plot.setupGrid();
                plot.draw();
            });


            /* REVENUE DONUT CHART */

            var data2 = [],
                series = 3;
            var data2 = [{
                    label: "Men",
                    data: 35
                },
                {
                    label: "Women",
                    data: 65
                }
            ];
            var revenue_donut_chart = $("#revenue-donut-chart");

            $("#revenue-donut-chart").bind("plotclick", function(event, pos, item) {
                if (item) {
                    $("#clickdata").text(" - click point " + item.dataIndex + " in " + item.series.label);
                    plot.highlight(item.series, item.datapoint);
                }
            });
            $.plot(revenue_donut_chart, data2, {
                series: {
                    pie: {
                        innerRadius: 0.4,
                        show: true
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                },
                colors: ["#1151ab", "#F85D2C "]
            });


            /* REVENUE BAR CHART */

            var bar_chart_data = [
                ["Jan", 10],
                ["Feb", 8],
                ["Mar", 4],
                ["Apr", 13],
                ["May", 17],
                ["Jun", 9],
                ["Jul", 10],
                ["Aug", 8],
                ["Sep", 4],
                ["Oct", 13],
                ["Nov", 17],
                ["Dec", 9]
            ];

            var bar_chart = $.plot(
                $("#revenue-bar-chart"), [{
                    data: bar_chart_data,
                    //           color: "rgba(31,174,102, 0.8)",
                    color: "#F85D2C",
                    shadowSize: 0,
                    bars: {
                        show: true,
                        lineWidth: 0,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    }
                }], {
                    series: {
                        bars: {
                            show: true,
                            barWidth: 0.9,
                            align: "center"
                        }
                    },
                    grid: {
                        show: true,
                        hoverable: true,
                        borderWidth: 0
                    },
                    yaxis: {
                        min: 0,
                        max: 20,
                        show: false
                    },
                    xaxis: {
                        mode: "categories",
                        tickLength: 0,
                        color: "#FFFFFF",
                    }
                });

            var previousPoint2 = null;
            $("#revenue-bar-chart").bind("plothover", function(event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint2 != item.dataIndex) {
                        previousPoint2 = item.dataIndex;
                        $("#tooltip").remove();
                        var x = item.datapoint[0] + 1,
                            y = item.datapoint[1].toFixed(2);
                        showTooltip(item.pageX, item.pageY,
                            "<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + x + " - 2013 </strong></p>" +
                            "<div style='padding: 0 10px 10px;'>" +
                            "<div> Sales: <strong>" + Math.round(y) * 17 + "</strong></div>" +
                            "<div> Profit: <strong>$" + Math.round(y) * 280 + "</strong></div>" +
                            "</div>"
                        );
                    }
                }
            });

            $('#revenue-bar-chart').bind("mouseleave", function() {
                $("#tooltip").remove();
            });



            /* PIE CHART */

            var pie_placeholder = $("#pie-chart");

            var pie_data = [];

            pie_data[0] = {
                label: "IE",
                data: 10
            }
            pie_data[1] = {
                label: "Safari",
                data: 8
            }
            pie_data[2] = {
                label: "Opera",
                data: 8
            }
            pie_data[3] = {
                label: "Chrome",
                data: 13
            }
            pie_data[4] = {
                label: "Firefox",
                data: 17
            }
            pie_data[5] = {
                label: "Other",
                data: 3
            }
            $.plot(pie_placeholder, pie_data, {
                series: {
                    pie: {
                        show: true,
                        label: {
                            show: true,
                            radius: .5,
                            formatter: labelFormatter,
                            background: {
                                opacity: 0
                            }
                        },

                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
                colors: ["#FCB660", "#ce91db", "#56A2CF", "#52D793", "#FC8660", "#CCCCCC"]
            });

            pie_placeholder.bind("plothover", function(event, pos, obj) {
                if (!obj) {
                    return;
                }
                var percent = parseFloat(obj.series.percent).toFixed(2);
                $("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
            });

            pie_placeholder.bind("plotclick", function(event, pos, obj) {
                if (!obj) {
                    return;
                }
                percent = parseFloat(obj.series.percent).toFixed(2);
                alert("" + obj.series.label + ": " + percent + "%");
            });

            function labelFormatter(label, series) {
                return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
            }



            var cityAreaData = [
                500.70,
                410.16,
                210.69,
                120.17,
                64.31,
                150.35,
                130.22,
                120.71,
                100.32
            ]
            $('#map1').vectorMap({
                map: 'world_mill_en',
                scaleColors: ['#C8EEFF', '#0071A4'],
                normalizeFunction: 'polynomial',
                focusOn: {
                    x: 5,
                    y: 0.56,
                    scale: 1.7
                },
                zoomOnScroll: false,
                zoomMin: 0.85,
                hoverColor: false,
                regionStyle: {
                    initial: {
                        fill: '#abe7c8',
                        "fill-opacity": 1,
                        stroke: '#abe7c8',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    },
                    hover: {
                        "fill-opacity": 0.8
                    },
                    selected: {
                        fill: 'yellow'
                    },
                    selectedHover: {}
                },
                markerStyle: {
                    initial: {
                        fill: '#F85D2C',
                        stroke: '#F85D2C',
                        "fill-opacity": 0.9,
                        "stroke-width": 10,
                        "stroke-opacity": 0.5,
                        r: 3
                    },
                    hover: {
                        stroke: '#F85D2C',
                        "stroke-width": 14
                    },
                    selected: {
                        fill: 'blue'
                    },
                    selectedHover: {}
                },
                backgroundColor: '#ffffff',
                markers: [{
                        latLng: [50, 0],
                        name: 'France - 43145 views'
                    },
                    {
                        latLng: [0, 120],
                        name: 'Indonesia - 145 views'
                    },
                    {
                        latLng: [-25, 130],
                        name: 'Australia - 486 views'
                    },
                    {
                        latLng: [0, 20],
                        name: 'Africa - 12 views'
                    },
                    {
                        latLng: [35, 100],
                        name: 'China - 7890 views'
                    },
                    {
                        latLng: [46, 105],
                        name: 'Mongolia - 2123 views'
                    },
                    {
                        latLng: [40, 70],
                        name: 'Kyrgiztan - 87456 views'
                    },
                    {
                        latLng: [58, 50],
                        name: 'Russia - 4905 views'
                    },
                    {
                        latLng: [35, 135],
                        name: 'Japan - 87456 views'
                    }
                ],
                series: {
                    markers: [{
                        attribute: 'r',
                        scale: [3, 7],
                        values: cityAreaData
                    }]
                },
            });


            /* REAL TIME CHART */

            var data = [],
                totalPoints = 300;

            function getRandomData() {

                if (data.length > 0)
                    data = data.slice(1);

                // Do a random walk

                while (data.length < totalPoints) {

                    var prev = data.length > 0 ? data[data.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }

                    data.push(y);
                }

                // Zip the generated y values with the x values

                var res = [];
                for (var i = 0; i < data.length; ++i) {
                    res.push([i, data[i]])
                }

                return res;
            }

            // Set up the control widget

            var updateInterval = 30;
            $("#updateInterval").val(updateInterval).change(function() {
                var v = $(this).val();
                if (v && !isNaN(+v)) {
                    updateInterval = +v;
                    if (updateInterval < 1) {
                        updateInterval = 1;
                    } else if (updateInterval > 2000) {
                        updateInterval = 2000;
                    }
                    $(this).val("" + updateInterval);
                }
            });

            var realtime_chart = $.plot("#realtime-chart", [getRandomData()], {
                series: {
                    shadowSize: 0, // Drawing is faster without shadows
                    lines: {
                        fill: true,
                        fillColor: "#ffe29c",
                    },
                    color: "#ffe29c",
                },
                yaxis: {
                    min: 0,
                    max: 100
                },
                xaxis: {
                    show: false
                },
                grid: {
                    borderWidth: 0
                },

            });

            function update() {
                realtime_chart.setData([getRandomData()]);

                // Since the axes don't change, we don't need to call plot.setupGrid()
                realtime_chart.draw();
                setTimeout(update, updateInterval);
            }

            update();


            /* FULL CALENDAR  */

            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            $('#calendar').fullCalendar({
                header: {
                    left: 'title',
                    center: '',
                    right: 'today prev,next'
                },
                editable: true,
                events: [{
                        title: 'All Day Event',
                        start: new Date(y, m, 1)
                    },
                    {
                        title: 'Long Event',
                        start: new Date(y, m, d - 5),
                        end: new Date(y, m, d - 2)
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d - 3, 16, 0),
                        allDay: false
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d + 4, 16, 0),
                        allDay: false
                    },
                    {
                        title: 'Meeting',
                        start: new Date(y, m, d, 10, 30),
                        allDay: false
                    },
                    {
                        title: 'Lunch',
                        start: new Date(y, m, d, 12, 0),
                        end: new Date(y, m, d, 14, 0),
                        allDay: false
                    },
                    {
                        title: 'Birthday Party',
                        start: new Date(y, m, d + 1, 19, 0),
                        end: new Date(y, m, d + 1, 22, 30),
                        allDay: false
                    },
                    {
                        title: 'Click for Google',
                        start: new Date(y, m, 28),
                        end: new Date(y, m, 29),
                        url: 'http://google.com/'
                    }
                ]
            });


            // Skycons

            var icons = new Skycons({
                    "color": "white",
                    "resizeClear": true
                }),
                icons_btm = new Skycons({
                    "color": "#F89C2C",
                    "resizeClear": true
                }),
                list = "clear-day",
                livd_btm = ["rain", "wind"];
            icons.set(list, list)
            for (var i = livd_btm.length; i--;)
                icons_btm.set(livd_btm[i], livd_btm[i]);

            icons.play();
            icons_btm.play();

            /* News Widget */
            $(".vd_news-widget .vd_carousel").carouFredSel({
                prev: {
                    button: function() {
                        return $(this).parent().parent().children('.vd_carousel-control').children('a:first-child')
                    }
                },
                next: {
                    button: function() {
                        return $(this).parent().parent().children('.vd_carousel-control').children('a:last-child')
                    }
                },
                scroll: {
                    fx: "crossfade",
                    onBefore: function() {
                        var target = "#front-1-clients";
                        $(target).css("transition", "all .5s ease-in-out 0s");
                        if ($(target).hasClass("vd_bg-soft-yellow")) {
                            $(target).removeClass("vd_bg-soft-yellow");
                            $(target).addClass("vd_bg-soft-red");
                        } else
                        if ($(target).hasClass("vd_bg-soft-red")) {
                            $(target).removeClass("vd_bg-soft-red");
                            $(target).addClass("vd_bg-soft-blue");
                        } else
                        if ($(target).hasClass("vd_bg-soft-blue")) {
                            $(target).removeClass("vd_bg-soft-blue");
                            $(target).addClass("vd_bg-soft-green");
                        } else
                        if ($(target).hasClass("vd_bg-soft-green")) {
                            $(target).removeClass("vd_bg-soft-green");
                            $(target).addClass("vd_bg-soft-yellow");
                        }
                    }
                },
                width: "auto",
                height: "responsive",
                responsive: true,
                auto: 3000

            });






        });
    </script>
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