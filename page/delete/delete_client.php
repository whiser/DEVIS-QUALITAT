<?php
	if(ISSET($_GET['id'])){
		include '../../config.php';
		$id = $_GET['id'];
		$sql = $conn->prepare("DELETE from `devis_client` WHERE `id`='$id'");
		$sql->execute();
		header('location:../../liste-devis.php');
	}
?>