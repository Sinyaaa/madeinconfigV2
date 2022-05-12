<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Ventilateur boitier</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="logo/monitor.png" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<header>
		<div class="lisere">
			<a href="index.php"><img src="logo/logo2.png" class="logolis"></a>
			<a href="panier.php" class="panier"><img src="logo/basket.png" width="40px" height="40px"></a>
		</div>
		<nav>
					<div class="navbar">
								  <a href="index.php">Accueil</a>
								  <a href="news.php">News</a>
						<div class="dropdown">
								    <button class="dropbtn">Composants
								      <i class="fa fa-caret-down"></i>
								    </button>
							<div class="dropdown-content">
								    <div class="header">
								        <h2>Composants</h2>
								    </div>   
								<div class="row-nav">
									<div class="column-nav">
								 		<h3>Composants PC</h3>
								   		<a href="proco.php">Processeur</a>
								   		<a href="cm.php">Carte mère</a>
							    		<a href="kitevo.php">Kit Evo</a>
									</div>
									<div class="column-nav">
										<h3 class="cacherpoint">.</h3>
										<a href="memoire.php">Mémoire</a>
										<a href="cg.php">Carte Graphique</a>
										<a href="boitierpc.php">Boitier</a>
									</div>
									<div class="column-nav">
										<h3 class="cacherpoint">.</h3>
									  	<a href="alim.php">Alimentation</a>
										<a href="ssd.php">SSD</a>
										<a href="disquedur.php">Disque Dur</a>
									</div>
									<div class="column-nav">
										<h3>Refroidissement PC</h3>
									  	<a href="ventil.php">Ventilateur PC</a>
										<a href="ventir.php">Ventirad PC</a>
										<a href="water.php">Watercooling</a>
									</div>
								</div>
							</div>
						</div> 
						<div class="dropdown">
								    <button class="dropbtn">Produits
								      <i class="fa fa-caret-down"></i>
								    </button>
							<div class="dropdown-content">
								    <div class="header">
								        <h2>Produits</h2>
								    </div>   
								<div class="row-nav">
									<div class="column-nav">
								   		<h3>Périphériques</h3>
								   		<a href="screen.php">Ecran PC</a>
               							<a href="clavier.php">Clavier</a>
               							<a href="mouse.php">Souris</a>
									</div>
									<div class="column-nav">
										<h3>Apple</h3>
										<a href="macbook.php">Macbook</a>
              							<a href="ipad.php">Ipad</a>
              							<a href="iphone.php">Iphone</a>
									</div>
									<div class="column-nav">
									</div>
									<div class="column-nav">
									</div>
								</div>
							</div>
						</div>
						<?php
									session_start();

									if(empty($_SESSION['userName'])) {
										echo "
										<div class=\"connect\"><a href=\"signUp.php\">Sign Up</a></div>
										<div class=\"connect\"><a href=\"connect.php\">Sign In</a></div> ";
									} else {
										$sess = $_SESSION['userName'];
										echo "<div class=\"connect\"><a href=\"#\">Bonjour ";
										echo "$sess";
										echo "!</a></div> <div class=\"connect\"><a href=\"deconnexion.php\">Deconnexion</a></div>";
									}

								?>

								<div class="search-container">
							    	<form action="/action_page.php">
							      		<input type="text" placeholder="Search.." name="search">
							     	 	<button type="submit"><i class="fa fa-search"></i></button>
							    	</form>
							  </div>
					</div>
		</nav>
	</header>

					<div class="row">
						  <div class="column">
						   	<img src="img/refroid/wings.png">
						    <div class="card">
						      <h3>be quiet! Pure Wings 2 120mm</h3>
						      <p>Les modèles Pure Wings 2 sont les dignes descendants des Silents Wings et Shadow Wings, maintes fois récompensés par la presse. De nombreuses améliorations ont été portées à la gamme pour parvenir à l'objectif ultime d'allier performances et silence d'or.</p>
						      <h1 class="price">11€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/refroid/nzxt.png">
						    <div class="card">
						      <h3>NZXT Aer RGB 2 140 mm</h3>
						      <p>Les ventilateurs NZXT Aer RGB 2 vont assurer un débit d'air optimal et apporteront de la couleur à votre boitier. Ils vont s'intégrer au système HUE 2 pour une personnalisation avancée. Vous aurez la possibilité de connecter jusqu'à 5 ventilateurs par canal ou de combiner avec tout accessoire HUE 2.</p>
						      <h1 class="price">39€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  
						 <div class="column">
						   	<img src="img/refroid/thermal.png">
						    <div class="card">
						      <h3>Thermaltake Pure 20 ARGB</h3>
						      <p>Le Thermaltake Pure 20 ARGB est un ventilateur pour boîtier permettant d'apporter un design personnalisable à votre boitier sans sacrifier les performances en matière de refroidissement. Chaque ventilateur dispose de LEDs adressables sur 16.8 millions de couleurs.</p>
						      <h1 class="price">54€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/refroid/corsair.png">
						    <div class="card">
						      <h3>Corsair SP120 RGB PRO (x3) et Ligthing Node CORE</h3>
						      <p>Obtenez un refroidissement très efficace de votre boîtier grâce aux ventilateurs Corsair Corsair SP120 RGB PRO. Ces ventilateurs Corsair de 120 mm sauront vous offrir un flux d'air sous haute pression ultra efficace.</p>
						      <h1 class="price">64€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>



			</div>
	<!-- 
	https://www.ldlc.com/fr-be/fiche/PB00151988.php
	https://www.ldlc.com/fr-be/fiche/PB00260599.php
	https://www.ldlc.com/fr-be/fiche/PB00276773.php
	https://www.ldlc.com/fr-be/fiche/PB00266951.php
-->			

<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>



