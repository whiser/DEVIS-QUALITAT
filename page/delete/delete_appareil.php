<?php
	if(ISSET($_GET['id'])AND($_GET['n'])){
		include '../../config.php';
		$id = $_GET['id'];
		$n = $_GET['id'];
		$sql = $conn->prepare("DELETE from `bacterie` WHERE `id`='$id'");
		$sql->execute();
		header("location:../../ajout_client.php?n= $n ");
	}
?>