<?php

include 'sessionstart.php';
include 'requete.php';

$id_client = $_GET['n'];
$teo = $_GET['teo'];
$puo = $_GET['puo'];
$tyb = $_GET['tyb'];
$teb = $_GET['teb'];
$typ = $_GET['typ'];
$tep = $_GET['tep'];
$pp = $_GET['pp'];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Impression Devis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="pdf.css" />
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>
    <style> 
        body {
            margin: 0;
            font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: .8125rem;
            font-weight: 400;
            line-height: 1.5385;
            color: #333;
            text-align: left;
            background-color: #eee
        }

        .mt-50 {
            margin-top: 50px
        }

        .mb-50 {
            margin-bottom: 50px
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .1875rem
        }

        .card-img-actions {
            position: relative
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
            text-align: center
        }

        .card-title {
            margin-top: 10px;
            font-size: 17px
        }

        .invoice-color {
            color: red !important
        }

        .card-header {
            padding: .9375rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .02);
            border-bottom: 1px solid rgba(0, 0, 0, .125)
        }

        a {
            text-decoration: none !important
        }

        .btn-light {
            color: #333;
            background-color: #fafafa;
            border-color: #ddd
        }

        .header-elements-inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        @media (min-width: 768px) {
            .wmin-md-400 {
                min-width: 400px !important
            }
        }

        .btn-primary {
            color: #fff;
            background-color: #2196f3
        }

        .btn-labeled>b {
            position: absolute;
            top: -1px;
            background-color: blue;
            display: block;
            line-height: 1;
            padding: .62503rem
        }
    </style>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
        <div class="col-md-12 text-left mt-3">
                                        <a href="acceuil.php">Retourner ?? l'acceuil</a>
                                         
                                    </div>
            <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download1"> T??l??charger le pdf</button>
            </div>
            <div class="col-md-12">
                <div class="card" id="invoice">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4 pull-left">

                                    <ul class="list list-unstyled mb-0 text-left">
                                        <img alt="logo" src="img/logo1.png" style="height: 50px;" /> <br>
                                        <li>C/254 SCOA GBETO , 05 BP 1192</li>
                                        <li>(+229) 21 60 38 97 / (+229) 96 86 27 28</li>
                                        <li>info@qualitat-group.net</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4 ">
                                    <div class="text-sm-right">
                                        <h4 class="invoice-color mb-2 mt-md-2">DEVIS #<?php echo $id_client;  ?></h4>
                                        <ul class="list list-unstyled mb-0">
                                            <?php $date = date('d-m-y');  ?>
                                            <li>Date: <span class="font-weight-semibold"><?php echo $date; ?></span></li>
                                            <h5 class="my-2">
                                                <li> Client : 
                                                    <span>
                                                            
                                                            <?php
                                                            $sql = $conn->prepare("SELECT * FROM `devis_client`ORDER BY id DESC LIMIT 1");
                                                            $sql->execute();
                                                            while ($fetch = $sql->fetch()) {
                                                                echo $fetch['c_name'];
                                                            }  ?>
                                                        
                                                    </span>
                                                
                                                </li>
                                            </h5>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-lg">
                                    <h6 style="margin: 10px;" >Liste des Appareils</h6 >
                            <thead>
                                <tr>
                                    <th style="width: 25px;" >#</th>
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
                                        <td style="width: 25px;" ><?php echo $j ?></td>
                                        <td><?php echo $row['app_name'] ?></td>
                                        <td><?php echo $row['puissance'] ?> W</td>
                                        <td><?php echo $row['temps'] ?> Heures</td>

                                        <td><?php echo $row['energie'] ?> Wh</td>

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

                            $n_serie = $capacite/$tyb;
                            $n_serie = (round( $n_serie));

                            $n_b_serie = $ten_ali/$teb;
                            $n_b_serie = (round( $n_b_serie));

                            $pc = ($EnergieProduite)/5;

                            $np = $pc/$pp;
                            $np = (round( $np));
                            //$npp = $np * $pp * 5;
                            if($np%2==0)
                            {
                                $npp = $np * $pp * 5;
                                if($npp<$EnergieProduite)
                                {
                                    $np = $np + 2;
                                }
                                else{
                                    $np = $np;
                                }
                            }
                            else
                            {
                                    $np = $np + 1;
                            }

                            ?>
                            
                            <tr>
                                <td></td>
                                <td><strong>PUISSANCE TOTALE : </strong></td>
                                <td><?php echo $SommePuissance; ?> W</td>
                                <td><strong>ENERGIE TOTALE : </strong></td>
                                <td><?php echo $SommeEnergie; ?> Wh</td>
                            </tr>

                        </tfoot>
                        </table>
                    </div>
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
                                                <th class="text-left">Energie Totale Consomm?? : <!-- <span class="font-weight-normal">(25%)</span> --></th>
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
                                                <th class="text-left">La capacit?? de la bact??rie est :</th>
                                                <td class="text-right"><?php echo $capacite; ?> V</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Type de Bact??ries Choisie :</th>
                                                
                                                <td class="text-right"><?php echo $teb; ?>V  /  <?php echo $tyb; ?>Ah
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Nombre de S??rie :</th>
                                                <td class="text-right"><?php echo $n_serie; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Nombre de Bact??ries par S??ries :</th>
                                                <td class="text-right"><?php echo $n_b_serie; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">R??gulateur :</th>
                                                <td class="text-right"><?php echo $ten_ali; ?>V /<?php echo $capacite; ?>Ah</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Puissance crete :</th>
                                                <td class="text-right"><?php echo $pc; ?>W</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Le type de Panneau Utilis?? est :</th>
                                                <td class="text-right">
                                                    <ul>
                                                        <li><?php echo $typ; ?></li>
                                                        <li>Tension : <?php echo $tep; ?> V</li>
                                                        <li>Puissance : <?php echo $pp; ?> KWh</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Nombre de paneau ?? installer :</th>
                                                <td class="text-right"><?php echo $np; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Onduleur Choisi :</th>
                                                <td class="text-right">
                                                    <ul>
                                                        <li>Tension : <?php echo $teo; ?> V</li>
                                                        <li>Puissance : <?php echo $puo; ?> KWh</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                    
            </div>
            <div class="col-md-12 text-right mt-3">
                                        <button class="btn btn-primary" id="download2"> T??l??charger le pdf</button>
                                    </div>
                                    <div class="col-md-12 text-left mt-3">
                                        <a href="acceuil.php">Retourner ?? l'acceuil</a>
                                         
                                    </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            document.getElementById("download1")
                .addEventListener("click", () => {
                    const invoice = this.document.getElementById("invoice");
                    console.log(invoice);
                    console.log(window);
                    var opt = {
                        margin: 1,
                        filename: 'devis_qualitat.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 2
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'letter',
                            orientation: 'portrait'
                        }
                    };
                    html2pdf().from(invoice).set(opt).save();
                })
                
                document.getElementById("download2")
                .addEventListener("click", () => {
                    const invoice = this.document.getElementById("invoice");
                    console.log(invoice);
                    console.log(window);
                    var opt = {
                        margin: 1,
                        filename: 'devis_qualitat.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 2
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'letter',
                            orientation: 'portrait'
                        }
                    };
                    html2pdf().from(invoice).set(opt).save();
                    
                })
                
        }
    </script>
</body>

</html>