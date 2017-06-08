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
<div class="descriptifP">
  <h1>Les modes de paiements</h1>
  <div class="iconesDiv">
    <div class="modeP anim1">
      <i class="fa fa-credit-card-alt fa-5x" aria-hidden="true"></i>
      <p>par carte</p>
    </div>
    <div class="modeP anim3">
      <img class=icone src="../images/icone_cheque.png" alt="">
      <p>par chèque</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
