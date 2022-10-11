<?php

include 'sessionstart.php';
include 'requete.php';

$id_client = $_GET['n'];


if (isset($_POST['saveapp'])) {
    try {
        $app_name = $_POST['app_name'];
        $temps = $_POST['temps'];
        $puissance = $_POST['puissance'];
        $energie = $_POST['energie'];
        $nom_technicien = $user_name;
        $devis_client_id = $id_client;
        $E = $puissance * $temps;
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `appareil` (`devis_client_id`,`app_name`,`puissance`,`energie`,`temps`,`nom_technicien`)
         VALUES ('$devis_client_id','$app_name','$puissance','$E','$temps','$nom_technicien')";
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    header('location:ajout_client.php?n=' . $id_client);
}

if (isset($_POST['update'])) {

    $c_name = $_POST['c_name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    $req  = $conn->prepare("UPDATE `devis_client` 
                            SET c_name = :c_name ,email = :email ,telephone = :telephone 
                            WHERE  id = :id");
    $req->execute(array(
        'c_name' => $c_name,
        'email' => $email,
        'telephone' => $telephone,
        'id' => $id_client
    ));
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
        <?php
        $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
        $select_profile->execute([$user_id]);
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>
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
                                <!--col-md-7 -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel widget">
                                            <div class="panel-heading vd_bg-grey">
                                                <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> Nom du client </h3>
                                            </div>


                                            <div class="panel-body table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = $conn->prepare("SELECT * FROM `devis_client`ORDER BY id DESC LIMIT 1");
                                                        $sql->execute();
                                                        while ($fetch = $sql->fetch()) {
                                                        ?>
                                                            <tr style="display: flex; justify-content:space-between;">
                                                                <td>
                                                                    <h3><?php echo $fetch['c_name'] ?></h3>
                                                                </td>
                                                                <td class="menu-action">
                                                                    <a class="btn menu-icon vd_bd-yellow vd_yellow" data-toggle="modal" data-target="#editcname">
                                                                        <i class="fa fa-pencil"></i> </a>
                                                                </td>
                                                            </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal fade" id="editcname" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" style="width: 100wh;">
                                                    <div class="modal-content">
                                                        <div class="modal-header vd_bg-blue vd_white">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                            <h4 class="modal-title" id="myModalLabel">Modifié les informations du client
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <form action="" method="POST">
                                                                        <label for="">Nom : </label>
                                                                        <input type="text" name="c_name" value="<?php echo $fetch['c_name'] ?> "> <br> <br>
                                                                        <label for="">Email : </label>
                                                                        <input type="text" name="email" value="<?php echo $fetch['email'] ?> "> <br> <br>
                                                                        <label for="">Téléphone : </label>
                                                                        <input type="text" name="telephone" value="<?php echo $fetch['telephone'] ?> "> <br> <br>
                                                                        <input type="submit" value="Mettre à jour" name="update" class="btn btn-primary">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div><?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Panel Widget -->
                                </div>


                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="panel widget">
                                            <div class="panel-heading vd_bg-grey">
                                                <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> Ajout Appareil </h3>
                                            </div>
                                            <form class="form-horizontal" method="POST" action="">
                                                <div class="col-12">
                                                    <label for="app_name" class="form-label">Nom de l'appareil</label>
                                                    <input type="text" class="form-control" id="app_name" name="app_name" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="puissance" class="form-label">Puissance</label>
                                                    <input type="number" name="puissance" class="form-control" id="puissance" oninput="autocalc()" required>
                                                </div>

                                                <div class="col-12">
                                                    <label for="intensite" class="form-label">Temps</label>
                                                    <input type="number" name="temps" class="form-control" id="temps" oninput="autocalc()" required>
                                                </div>
                                                <script>
                                                    function autocalc() {
                                                        var puissance = document.getElementById("puissance").value;
                                                        var temps = document.getElementById("temps").value;
                                                        var E = +puissance * +temps;
                                                        document.getElementById("c_energie").innerHTML = E;


                                                    }
                                                </script>
                                                <br>
                                                <div>
                                                    <label class="form-label">Energie = </label>
                                                    <label id="c_energie" class="form-label">0</label>
                                                </div><br>
                                                <div class="col-12">
                                                    <button class="btn vd_btn vd_bg-green vd_white" type="submit" name="saveapp"> Valider</button>
                                                </div>
                                                <hr>


                                            </form>




                                        </div>
                                    </div>
                                    <div class="col-md-9">



                                        <div class="panel widget">
                                            <div class="panel-heading vd_bg-grey">
                                                <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> Table Basic with
                                                    Hover </h3>
                                            </div>
                                            <div class="panel-body table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nom de l'appareil</th>
                                                            <th>Puissance</th>
                                                            <th>temps</th>
                                                            <th>Energie</th>
                                                            <th>Ajouter par</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = $conn->prepare("SELECT * FROM `appareil`
                                                         WHERE devis_client_id = $id_client");
                                                        $sql->execute();

                                                        while ($fetch = $sql->fetch()) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $fetch['id'] ?></td>
                                                                <td><?php echo $fetch['app_name'] ?></td>
                                                                <td><?php echo $fetch['puissance'] ?> watts</td>
                                                                <td><?php echo $fetch['temps'] ?> Heures</td>
                                                                <td><?php echo $fetch['energie'] ?> Kw</td>
                                                                <td><?php echo $fetch['nom_technicien'] ?> </td>
                                                                <td class="menu-action"> <a href="page/delete/delete_appareil.php?id=<?php echo $fetch['id'] ?>&n=<?php echo $fetch['devis_client_id'] ?>" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"> <i class="fa fa-times"></i> </a>
                                                                </td>
                                                            </tr>



                                                    </tbody>

                                                <?php } ?>



                                                <tfoot>
                                                    <?php
                                                    $sqlsump = $conn->prepare("SELECT SUM(puissance)  AS PU
                                                         FROM appareil WHERE devis_client_id = $id_client");
                                                    $sqlsump->execute();
                                                    $Pu = $sqlsump->fetch(PDO::FETCH_ASSOC);
                                                    $SommePuissance = $Pu['PU'];

                                                    $sqlsume = $conn->prepare("SELECT SUM(energie)  AS EN
                                                         FROM appareil WHERE devis_client_id = $id_client");
                                                    $sqlsume->execute();
                                                    $En = $sqlsume->fetch(PDO::FETCH_ASSOC);
                                                    $SommeEnergie = $En['EN'];
                                                    $EnergieProduite = 0;
                                                        $EnergieProduite = $SommeEnergie + (0.25 * $SommeEnergie);
                                                        $NbPaneaux = ($EnergieProduite * 1000) / 5;
                                                        $ten_ali = 0;
                                                        $capacite = 0;
                                                        if($EnergieProduite<=1000){
                                                            $ten_ali = 12 ;
                                                        }
                                                        elseif($EnergieProduite>1000 AND $EnergieProduite<=2300){
                                                            $ten_ali = 24 ;
                                                        }
                                                        else{
                                                            $ten_ali = 48 ;
                                                        }
                                                        ?>
                                                        <?php 
                                                        $capacite = ($EnergieProduite * 1)/(0.8 * $ten_ali);
                                                        $capacite = (round( $capacite));
                                                        $pc = ($EnergieProduite)/5;
                                                        ?>
                                                    
                                                    <tr>
                                                        <td></td>
                                                        <td><strong>PUISSANCE TOTAL : </strong></td>
                                                        <td><?php echo $SommePuissance; ?> watts</td>
                                                        <td><strong>ENERGIE TOTAL : </strong></td>
                                                        <td><?php echo $SommeEnergie; ?> Kw</td>
                                                        <td></td>
                                                    </tr>

                                                </tfoot>





                                                </table><br />
                                                <br />
                                                <div class="card-body">
                        <div class="d-md-flex flex-md-wrap">
                            <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                <h6 class="mb-3 text-left">Total</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="text-left">Puissance Totale :</th>
                                                <td class="text-right"><?php echo $SommePuissance; ?> W</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Energie Totale Consommé : <!-- <span class="font-weight-normal">(25%)</span> --></th>
                                                <td class="text-right"><?php echo $SommeEnergie; ?> Wh</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Energie Totale Produite :</th>
                                                <td class="text-right"><?php echo $EnergieProduite; ?> Wh</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">La tension d'alimentation est :</th>
                                                <td class="text-right"><?php echo $ten_ali; ?> V</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">La capacité de la bactérie est :</th>
                                                <td class="text-right"><?php echo $capacite; ?> V</td>
                                            </tr>
                                            <form method="post" action="impr.php?n=<?php echo $id_client ?>">
                                            <tr>
                                                <th class="text-left">Choisir la bactérie adéquat : </th>
                                                <td class="text-right">
                                                    
                                                        <select name="choix_bacterie" id="choix_bacterie">
                                                        <?php
                                                        $sql = $conn->prepare("SELECT * FROM `bacterie`");
                                                        $sql->execute();
                                                        echo "<option>---</option>";
                                                        while ($fetch = $sql->fetch()) {
                                                            
                                                            echo "<option value=".$eb=$fetch['energie_bacterie']."-".$tb=$fetch['tension_bacterie'].">".$fetch['energie_bacterie']." Ah  - ".$fetch['tension_bacterie']." V </option>\n";
                                                        } ?> 
                                                        </select>
                                                     <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Régulateur :</th>
                                                <td class="text-right"><?php echo $ten_ali; ?> V /<?php echo $capacite; ?> Ah</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Puissance crete :</th>
                                                <td class="text-right"><?php echo $pc; ?> W</td>
                                            </tr>

                                            <tr>
                                                <th class="text-left">Choisir le panneau adéquat : </th>
                                                <td class="text-right">
                                                    
                                                        <select name="choix_panneau" id="choix_panneau">
                                                        <?php
                                                        $sql = $conn->prepare("SELECT * FROM `panneau`");
                                                        $sql->execute();
                                                        echo "<option>---</option>";
                                                        while ($fetch = $sql->fetch()) {
                                                            echo "<option value=".$tp=$fetch['type_panneau']."-".$tp=$fetch['tension_panneau']."-".$pp=$fetch['puissance_panneau'].">".$fetch['type_panneau']."  - ".$fetch['tension_panneau']." V  - ".$fetch['puissance_panneau']." KWh </option>\n";
                                                        } ?> 
                                                        </select>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <th class="text-left">Choisir l'onduleur : </th>
                                                <td class="text-right">
                                                    
                                                        <select name="choix_onduleur" id="choix_onduleur">
                                                        <?php
                                                        $sql = $conn->prepare("SELECT * FROM `onduleur`");
                                                        $sql->execute();
                                                        echo "<option>---</option>";
                                                        while ($fetch = $sql->fetch()) {
                                                            echo "<option value=".$tp=$fetch['tension_onduleur']."-".$tp=$fetch['puissance_onduleur'].">".$fetch['tension_onduleur']." V - ".$fetch['puissance_onduleur']." KWh </option>\n";
                                                        } ?> 
                                                        </select>
                                                    
                                                </td>
                                            </tr>
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                                                
                                                <!-- <script>
                                                    pagedata.mySelect = document.getElementById("mySelect").value;
                                                </script> -->

                                                <br><br>
                                                <!-- <button class="btn btn-primary " onclick="generatePDF()"> Télécharger le devis </button> -->
                                                <br><br>
                                                <center>
                                                    <!-- <a target="_blank" href="impression.php?n=<?php echo $id_client ?>&tb=<?php echo $tb ?>&enb=<?php echo $eb ?>">
                                                        <button  class="btn btn-primary ">Imprimer</button> </a>-->
                                                        <button class="btn vd_btn vd_bg-green vd_white" type="submit" name="impr"> Imprimer</button>
                                                    
                                                </center> </form>
                                                <br><br>



                                                <br><br>

                                                <!--  <div class="container print" id="printThis">

                                                    <div class="grid-container" style="width: 100%;">

                                                        <div>
                                                            <img alt="logo" src="img/logo1.png" style="height: 50px;" /> <br>
                                                            C/254 SCOA GBETO , 05 BP 1192<br>
                                                            (+229) 21 60 38 97 / (+229) 96 86 27 28<br>
                                                            info@qualitat-group.net
                                                        </div>
                                                        <div>
                                                            <table class="invoice-head" style="margin-top: 20px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class=""><strong>Client : </strong></td>
                                                                        <td>
                                                                            <?php
                                                                            $sql = $conn->prepare("SELECT * FROM `devis_client`ORDER BY id DESC LIMIT 1");
                                                                            $sql->execute();
                                                                            while ($fetch = $sql->fetch()) {
                                                                                echo $fetch['c_name'];
                                                                            }  ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="pull-right"><strong>Code #</strong></td>
                                                                        <td><?php echo $id_client;  ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="pull-right"><strong>Date :</strong></td>
                                                                        <?php $date = date('d-m-y');  ?>
                                                                        <td><?php echo $date; ?></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <br> <br>

                                                    <div class="grid-container-2">
                                                        <div class="row">

                                                            <h2 style="margin-left: 20px;">DEVIS</h2>
                                                            <p style="margin-left: 20px;">Liste des appareils </p>


                                                            <div class="span8 well invoice-body">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Nom de l'appareil</th>
                                                                            <th>Puissance</th>
                                                                            <th>temps</th>

                                                                            <th>Energie</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sql = $conn->prepare("SELECT * FROM `appareil`
                                                         WHERE devis_client_id = $id_client");
                                                                        $sql->execute();

                                                                        for ($j = 1; $row = $sql->fetch(); $j++) {
                                                                        ?>

                                                                            <tr>
                                                                                <td><?php echo $j ?></td>
                                                                                <td><?php echo $row['app_name'] ?></td>
                                                                                <td><?php echo $row['puissance'] ?> watts</td>
                                                                                <td><?php echo $row['temps'] ?> Heures</td>

                                                                                <td><?php echo $row['energie'] ?> Kw</td>

                                                                            </tr>
                                                                    </tbody>

                                                                <?php } ?>
                                                                <tfoot>
                                                                    <?php
                                                                    $sqlsump = $conn->prepare("SELECT SUM(puissance)  AS PU
                                                         FROM appareil WHERE devis_client_id = $id_client");
                                                                    $sqlsump->execute();
                                                                    $Pu = $sqlsump->fetch(PDO::FETCH_ASSOC);
                                                                    $SommePuissance = $Pu['PU'];

                                                                    $sqlsume = $conn->prepare("SELECT SUM(energie)  AS EN
                                                         FROM appareil WHERE devis_client_id = $id_client");
                                                                    $sqlsume->execute();
                                                                    $En = $sqlsume->fetch(PDO::FETCH_ASSOC);
                                                                    $SommeEnergie = $En['EN'];
                                                                    $EnergieProduite = 0;
                                                                    $EnergieProduite = $SommeEnergie + (0.25 * $SommeEnergie);
                                                                    $NbPaneaux = ($EnergieProduite * 1000) / 5;
                                                                    ?>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><strong>PUISSANCE TOTAL : </strong></td>
                                                                        <td><?php echo $SommePuissance; ?> watts</td>
                                                                        <td><strong>ENERGIE TOTAL : </strong></td>
                                                                        <td><?php echo $SommeEnergie; ?> Kw</td>
                                                                    </tr>

                                                                </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>


                                                    </div>

                                                     <div class="grid-container-3">
                                                        <div class="row">
                                                            <table style="margin-left: 20px;">
                                                                <tr>
                                                                    <td>Type depanneau choisi : </td>
                                                                    <td></td>
                                                                    <td id="demoselect"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nombre de panneau à utiliser : </td>
                                                                    <td></td>
                                                                    <td><?php echo $NbPaneaux; ?></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>



                                                </div> -->

                                                <br><br>

                                            </div>
                                        </div>
                                        <!-- Panel Widget -->
                                    </div>
                                    <!-- Panel Widget -->
                                </div>

                                <!-- .col-md-5 -->
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
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        }
    </script>
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
    <!-- Script to print the content of a div -->



    <script>
        function myFunction() {
            pagedata.mySelect = document.getElementById("mySelect").value;
            document.getElementById("demoselect").innerHTML = "  " + pagedata.mySelect;
        }
    </script>


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