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
      <input type="submit" id='validationMad'  value="Reservez">
    </form>
    </div>
    <div class="confirmationMad">
      <div class="modalMad">
        <h1>Votre reservation</h1>
        <form class="" action="aeroport.php" method="post">
          <div class="">
            <div class="label">
              <label for="Nom">Nom:</label>
              <input type="text" name="" value="" placeholder="entrer votre nom">
            </div>
            <div class="label">
              <label for="Nom">Prenom:</label>
              <input type="text" name="" value="" placeholder="entrer votre prenom">
            </div>
          </div>
          <div class="">
            <div class="label">
              <label for="Nom">Telephone:</label>
              <input type="text" name="" value="" placeholder="entrer votre numero">
            </div>
            <div class="label">
              <label for="Nom">Depart de:</label>
              <?php echo '<input type="text" name="" value="'.$_POST['origineMad'].'" disabled="disabled">'; ?>
            </div>
          </div>
          <div class="">
            <div class="label">
              <label for="Nom">Debut de la prise en charge:</label>
              <?php
              if(isset($_POST['dateMad']) && isset($_POST['horairesMadDebut'])){
                echo '<input type="text" name="" value="'.$_POST['dateMad'].', à '.$_POST['horairesMadDebut'].' h" disabled="disabled">';
              }else{
                echo '<input type="text" name="" value="" disabled="disabled">';
              }
              ?>
            </div>
            <div class="label">
              <label for="Nom">Fin de la prise en charge:</label>
              <?php
              if(isset($_POST['dateMadfin']) && isset($_POST['horairesMadFin'])){
                echo '<input type="text" name="" value="'.$_POST['dateMadfin'].', à '.$_POST['horairesMadFin'].' h" disabled="disabled">';
              }else{
                echo '<input type="text" name="" value="" disabled="disabled">';
              }
              ?>
            </div>
          </div>
        </form>
        <div class="boutons">
          <button id="annulationMad" class="boutonModal" type="button" name="button">Annuler</button>
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
