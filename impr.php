<?php

$id_client = $_GET['n'];
if (isset($_POST['impr'])) {
    try {
        $array_onduleur = explode("-", $_POST['choix_onduleur']);

        $teo = $array_onduleur[0];
        $puo = $array_onduleur[1];

        $array_bacterie = explode("-", $_POST['choix_bacterie']);

        $tyb = $array_bacterie[0];
        $teb = $array_bacterie[1];

        $array_panneau = explode("-", $_POST['choix_panneau']);

        $typ = $array_panneau[0];
        $tep = $array_panneau[1];
        $pp = $array_panneau[2];

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    header('location:impression.php?n=' .$id_client.'&teo='.$teo.'&puo='.$puo.'&tyb='.$tyb.'&teb='.$teb.'&typ='.$typ.'&tep='.$tep.'&pp='.$pp);
}
