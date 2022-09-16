<?php


	if(ISSET($_POST['saveapp'])){
		try{
			$app_name = $_POST['app_name'];
			$tension = $_POST['tension'];
			$intensite = $_POST['intensite'];
			$puissance = $_POST['puissance'];
			$energie = $_POST['energie'];
			$devis_client_id = $id_client;
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `appareil` (`devis_client_id`,`app_name`,`tension`,`intensite`,`puissance`,`energie`)
			 VALUES ('$devis_client_id',$app_name',$tension',$intensite',$puissance',$energie')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:ajout_client.php');
	}
	
?>