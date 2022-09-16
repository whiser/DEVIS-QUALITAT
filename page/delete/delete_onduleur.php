<?php
	if(ISSET($_GET['id'])){
		include '../../config.php';
		$id = $_GET['id'];
		$sql = $conn->prepare("DELETE from `onduleur` WHERE `onduleur_id`='$id'");
		$sql->execute();
		header('location:../../onduleur.php');
	}
?>