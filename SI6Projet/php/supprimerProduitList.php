<?php
	session_start();
	$user = "root";
	$mdp = "";
	$connextion = False;
	
	if($_POST['categorie'] != "null"){
		$_SESSION['cat'] = $_POST['categorie'];
		header('Location:../html/supprimerProduit.php');
	}
	else{
		$_SESSION['cat'] = null;
		header('Location:../html/supprimerProduit.php');
	}
	
			
		

?>

