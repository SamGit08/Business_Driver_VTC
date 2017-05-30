


	<div id="reserverClick">
	<br><br>
	RESERVEZ<br>
	EN UN CLICK
	</div>
	<form id="form" method="post" action="../app/form.php">
		<br>
		<h1>Entrez votre trajet</h1>
		<label for="origine">Partir de:</label><br>
		<input type="text" name="origineAc" id="origine"><br>
		<label for="destination">Aller à:</label><br>
		<input type="text" name="destinationAc" id="destination"><br>
		<label for="date">Date:</label><br>
		<input type="date" name="dateAc" value="" placeholder="jj/mm/aaaa"><br>
		<label for="heure">Horaire:</label>
		<select name="horairesAc">
			<option value="06:00">06:00</option>
			<option value="07:00">07:00</option>
			<option value="08:00">08:00</option>
			<option value="09:00">09:00</option>
			<option value="10:00">10:00</option>
			<option value="11:00">11:00</option>
			<option value="12:00">12:00</option>
			<option value="13:00">13:00</option>
			<option value="14:00">14:00</option>
			<option value="15:00">15:00</option>
			<option value="16:00">16:00</option>
			<option value="17:00">17:00</option>
			<option value="18:00">18:00</option>
			<option value="19:00">19:00</option>
			<option value="20:00">20:00</option>
			<option value="21:00">21:00</option>
			<option value="22:00">22:00</option>
			<option value="23:00">23:00</option>
			<option value="00:00">00:00</option>
		</select><br><br>
		<input id="submit" type="submit" value="Reservez">
	</form>
<video id="film" src="../images/film.mp4" width="1000px" autoplay loop>Optez pour un navigateur plus récent</video>
<hr>
	<div class="descriptifP">
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
	<hr id='trainAccueil'>
	<?php require 'mode_paiement.php'; ?>
	<?php require 'footer.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
