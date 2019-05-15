<?php
	session_start();
	$_SESSION['cat'] = null;

?>


<!DOCTYPE html5>
<html>
	<head>
		<meta charset="utf8">
		<title>Login utilisateur</title>
		<link href="../css/accueil.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body>
		
		
		<div class="header">
		</div>

		<div id="navbar">
		  <a class="active" href="../html/accueil.php">Accueil</a>
		  <a href="../html/listeProduit.php">Liste Produit</a>
		  <a href="../html/ajouterProduit.php">Ajout Produit</a>
		  <a href="../html/ajouterCat.php">Ajout Catégorie</a>
		  <a href="../html/supprimerProduit.php">Suppression Produit</a>
		  <div class="topnav-right">
			<a href="../html/Connexion.html">Déconnexion</a>
		  </div>
		</div>
		
		<div id="contain">
			<br>
			<p><img src="../image/produit.jpg" alt="produit" class="produit"></p>
		
		</div>

		
		
		
		
		<script>
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		  } else {
			navbar.classList.remove("sticky");
		  }
		}
		</script>
	</body>
</html>

