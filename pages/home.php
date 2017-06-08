


	<div id="reserverClick">
	<br><br>
	RESERVEZ<br>
	EN UN CLICK
	</div>
	<form id="form" method="post" action="../app/form.php">
		<h1>Entrez votre trajet</h1>
		<hr>
		<div class="accueil">
			<fieldset>
				<label for="origine">Partir de:</label>
				<input type="text" name="origineAc" id="origine"><br>
				<label for="destination">Aller à:</label>
				<input type="text" name="destinationAc" id="destination"><br>
				<label for="date">Date:</label>
				<input type="date" name="dateAc" value="" placeholder="jj/mm/aaaa"><br>
				<label for="heure">Horaire:</label>
				<input type="text" name="horairesAc" value="">
			</fieldset>
			<fieldset>
				<h2>Coordonnées</h2>
				<label for="origine">Nom:</label>
				<input type="text" name="nomAc" id="origine"><br>
				<label for="origine">Prenom:</label>
				<input type="text" name="prenomAc" id="origine"><br>
				<label for="origine">Telephone:</label>
				<input type="text" name="TelAc" id="origine"><br>
			</fieldset>
		</div>
		<button type="button" id="validationAc">Reserver</button>
		<div class="boutonsAc">
			<button class="boutonModal" type="button" name="button">Confirmer</button>
			<button id="annulationAc" class="boutonModal" type="button" name="button">Annuler</button>
		</div>
	</form>
<video id="film" src="../images/film.mp4" width="1000px" autoplay loop>Optez pour un navigateur plus récent</video>
<hr id='trainAccueil'>
	<div class="descriptifP">
		<div class="infoP">
			<h1>Avantages</h1>
			<div class="iconesDiv">
			<div class="modeP anim1">
				<img class="image" src="../images/telMain.png" width="130px">
				<p>Le moyen le plus simple de se déplacer
					Appuyez sur une touche et votre chauffeur est déjà là pour vous amener à bon port. En sécurité et confort. Paiement simple et rapide.</p>
			</div>
			<div class="modeP anim2">
				<img class="image" src="../images/chauffeur.jpg">
				<p> Partout, à tout instant. Un vol à prendre  ? Une course à l'autre bout de la ville, ou un grand trajet ? <strong>Transfert Class</strong>  vient vous chercher à tout moment.</p>
			</div>
			<div class="modeP anim3">
				<img class="image" src="../images/paiement.jpg">
				<p>Accessible à tous. Une qualité de service haut de gamme. Pour votre transport en confiance et à n'importe quelle occasion, commandez un véhicule de qualité.</p>
			</div>
		</div>
	</div>
	</div>
	<hr id='trainAccueil'>
	<?php require 'mode_paiement.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
