<div id="mesure">
    <h1>Long Trajet</h1>
    <form class="formulaire" method="post" action="#"><br>
      <h2>Mes informations</h2>
      <fieldset>
        <label for="origine">Lieu de prise en charge:</label>
        <input type="text" name="origineLT" id="origine"><br>
        <div class="hd">
          <label for="date">Date:</label>
          <input type="date" name="dateLT" value="" placeholder="jj/mm/aaaa">
          <label for="heure">Horaire:</label>
          <input type="text" name="horairesLT" value="">
        </div>
      </fieldset>
      <hr>
      <fieldset>
        <label for="">Etape dans votre trajet:</label>
        <select class="" name="etapeLT">
          <optgroup label="etape">
            <option value="non">Non</option>
            <option value="oui">Oui</option>
          </optgroup>
        </select>
        <label for="destination">Destination:</label>
        <input type="text" name="destinationLT" id="destination">
      </fieldset>
      <button type="button" id="validationLT">Reserver</button>
      <div class="boutonsLT">
        <button class="boutonModal" type="button" name="button">Confirmer</button>
        <button id="annulationLT" class="boutonModal" type="button" name="button">Annuler</button>
      </div>
    </form>
<<<<<<< HEAD
  </div>
=======
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
>>>>>>> 960f8663f9b004c7613b66bb7e664dc2adc265c4
<?php require 'mode_paiement.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
