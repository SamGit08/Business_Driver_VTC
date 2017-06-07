


<div id="mesure">
    <h1>Long Trajet</h1>
    <form class="formulaire" method="post" action="#"><br>
      <label for="origine">Lieu de prise en charge:</label><br>
      <input type="text" name="origineLt" id="origine"><br>
      <div class="hd">
        <label for="date">Date:</label>
        <input type="date" name="dateLt" value="" placeholder="jj/mm/aaaa">
        <label for="heure">Horaire:</label>
        <select class="horaires" name="horairesLt">
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
        </select><br>
      </div>
      <label for="">Etape dans votre trajet:</label>
      <div class="radio2">
        <input type="radio" name="choixLt" value="oui">Oui
        <input type="radio" name="choixLt" value="non" checked>Non
      </div>
      <label for="destination">Destination:</label><br>
      <input type="text" name="destinationLt" id="destination"><br>
      <input id="submitLT" type="submit" value="Reservez">
    </form>
    <div class="confirmationLT">
      <div class="modalLT">
         <h1 class="titreReservation">votre reservation</h1>
          <div class="infosResa">
     <p>lieu de prise en charge: <?php echo $_POST['origineLt']; ?></p>
     <p> date : <?php echo $_POST['dateLt']; ?></p>
     <p>heure: <?php echo $_POST['horairesLt']; ?></p>
      <p>etapes de votre trajet : <?php echo $_POST['choixLt']; ?></p>
      <p>votre destination: <?php echo $_POST['destinationLt']; ?></p>
          </div>
          <div class="boutons">
            <button id="annulationLT" class="boutonModal" type="button" name="button">Annuler</button>
            <button class="boutonModal" type="button" name="button">Confirmer</button>
          </div>
      </div>
    </div>
</div>
<?php require 'mode_paiement.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
