<?php
include 'config.php';
include 'sessionstart.php';

	if(ISSET($_POST['savepanneau'])){
		try{
			$type_panneau = $_POST['type_panneau'];
			$tension_panneau = $_POST['tension_panneau'];
			$puissance_panneau = $_POST['puissance_panneau'];
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `panneau` (`type_panneau`, `tension_panneau`, `puissance_panneau`)
			 VALUES ('$type_panneau', '$tension_panneau', '$puissance_panneau')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:panneau.php');

	}

    if(ISSET($_POST['saveonduleur'])){
		try{
			$puissance_onduleur = $_POST['puissance_onduleur'];
			$tension_onduleur = $_POST['tension_onduleur'];
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `onduleur` (`puissance_onduleur`, `tension_onduleur`) VALUES ('$puissance_onduleur', '$tension_onduleur')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:onduleur.php');
        
	}
	if(ISSET($_POST['saveclient'])){
		try{
			$c_name = $_POST['c_name']; 
			$email = $_POST['email'];
			$telephone = $_POST['telephone'];
			
			$nom_technicien = $user_name;
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `devis_client` (`c_name`,`nom_technicien`,`email`,`telephone`) 
				VALUES ('$c_name','$nom_technicien','$email','$telephone')";
			$conn->exec($sql);
			$id_client = $conn->lastInsertId();

		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:ajout_client.php?n='.$id_client);	
	}
