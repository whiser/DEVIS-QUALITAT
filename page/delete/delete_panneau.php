<?php
	if(ISSET($_GET['id'])){
		include '../../config.php';
		$id = $_GET['id'];
		$sql = $conn->prepare("DELETE from `panneau` WHERE `panneau_id`='$id'");
		$sql->execute();
		header('location:../../panneau.php');
	}
?>