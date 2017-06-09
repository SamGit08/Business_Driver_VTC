<div id="disposition">
    <h1>Mise à disposition</h1>
    <form class="formulaire3" method="post" action="#"><br>
      <label for="origine">Votre adresse:</label><br>
      <input type="text" name="origineMad" id="origine"><br>
      <fieldset>
        <h2>Début de prise en charge</h2>
        <div class="hd">
          <div class="debut">
            <label for="date">Date:</label><br>
            <input type="date" name="dateMad" value="" placeholder="jj/mm/aaaa"><br>
            <label for="heure">Horaire:</label>
            <input type="text" name="horairesMadDebut" value="">
          </div>
        </div>
      </fieldset>
      <hr>
      <fieldset>
        <h2>Fin de prise en charge</h2>
        <div class="hd">
          <div class="debut">
            <label for="date">Date:</label><br>
            <input type="date" name="dateMadfin" value="" placeholder="jj/mm/aaaa"><br>
            <label for="heure">Horaire:</label>
            <input type="text" name="horairesMadFin" value="">
          </div>
        </div>
      </fieldset>
      <button type="button" id='validationMad'>Reserver</button>
      <div class="boutonsMad">
        <button class="boutonModal" type="button" name="button">Confirmer</button>
        <button id="annulationMad" class="boutonModal" type="button" name="button">Annuler</button>
      </div>
    </form>
  </div>
  <?php require 'mode_paiement.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
