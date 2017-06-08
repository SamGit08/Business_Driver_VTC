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
  </div>
</div>
<?php require 'mode_paiement.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
