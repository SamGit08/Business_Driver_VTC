<div id="disposition">
    <h1>Mise à disposition</h1>
    <form class="formulaire3" method="post" action="#"><br>
      <label for="origine">Votre adresse:</label><br>
      <input type="text" name="origineMad" id="origine"><br>
      <h2>Début de prise en charge</h2>
      <div class="hd">
        <div class="debut">
          <label for="date">Date:</label><br>
          <input type="date" name="dateMad" value="" placeholder="jj/mm/aaaa"><br>
          <label for="heure">Horaire:</label>
          <select class="horaires" name="horairesMadDebut">
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
      </div>
      <hr>
      <h2>Fin de prise en charge</h2>
      <div class="hd">
        <div class="debut">
          <label for="date">Date:</label><br>
          <input type="date" name="dateMadfin" value="" placeholder="jj/mm/aaaa"><br>
          <label for="heure">Horaire:</label>
          <select class="horaires" name="horairesMadFin">
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
      </div>
      <input id="submitMD" type="submit" value="Reservez">
    </form>
    <div class="confirmationLT">
      <div class="modalLT">
         <h2>votre reservation</h2>
          <div class="infosResa">
             <p>votre adresse : <?php echo $_POST['origineMad']; ?></p>
             <p>prise en charge : <?php echo $_POST['dateMad']; ?></p>
             <p>heure du debut : <?php echo $_POST['horairesMadDebut']; ?></p>
             <p>date de fin : <?php echo $_POST['dateMadfin']; ?></p>
             <p>heure de fin : <?php echo $_POST['horairesMadFin']; ?></p>

          </div>
          <div class="boutons">
            <button id="annulationLT" class="boutonModal" type="button" name="button">Annuler</button>
            <button class="boutonModal" type="button" name="button">Confirmer</button>
          </div>
      </div>
    </div>
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
