
  <div id="aile">
    <h1>Trajet aéroport</h1>
    <form class="formulaire2" method="post" action="#"><br>
      <h2>Mes informations</h2>
      <div class="">
        <label for="name">Nom*:</label>
        <input type="text" name="nomAe" value="" required="" placeholder="entrez votre nom" id='name'>
        <label for="firstname">Prenom*:</label>
        <input type="text" name="firstnameAe" value="" required="" placeholder="entrez votre prenom" id='firstname'><br>
      </div>
      <div id="email">
        <label for="email">Email*:</label>
        <input type="email" name="mailAe" value="" required="" placeholder="ex:driver@gmail.com">
      </div>
      <hr>
      <h2>Mon trajet</h2>
      <div class="">
        <label for="go">Depart*:</label>
        <input type="text" name="departAe" value="" id="go" placeholder="entrez votre lieu de depart"><label for="selection" id='choix1'>ou aeroport:</label>
        <select value="choisir un aeroport" name="aeroportAeD">
          <optgroup label="Votre aéroport">
            <option id="cdg" value="Paris/Roissy-Charles de Gaulle">Paris/Roissy-Charles de Gaulle</option>
            <option id="aeroportOrly" value="Paris/Orly">Paris/Orly</option>
            <option id="beauvaisAero" value="Aéroport Beauvais">Aéroport Beauvais</option>
          </optgroup>
        </select><br>
        <section id="vol">
          <label id="terminal" for="terminaux">Terminal</label>
          <select class="terminaux" name="aeroport1">
            <optgroup label="Votre Terminal">
              <option value="sud">Sud</option>
              <option value="ouest">Ouest</option>
              <option value="1">1</option>
              <option value="2A">2A</option>
              <option value="2C">2C</option>
              <option value="2D">2D</option>
              <option value="2E">2E</option>
              <option value="2F">2F</option>
              <option value="2G">2G</option>
              <option value="3">3</option>
              <option value="T1">T1</option>
              <option value="T2">T2</option>
              <option value="St Exu">ST Ex</option>
            </optgroup>
          </select>
        </section>
      </div>
      <div class="">
        <label for="arrivée">Arrivée*:</label>
        <input type="text" name="arriveeAe" value="" id="arrivee" placeholder="entrez votre lieu d'arrivée">
        <label for="selection" id='choix2'>ou aeroport:</label>
        <select class="two" name="aeroportAeA" id='selection'>
          <optgroup label="Votre aéroport">
            <option value="Paris/Roissy-Charles de Gaulle">Paris/Roissy-Charles de Gaulle</option>
            <option value="Paris/Orly">Paris/Orly</option>
            <option value="Aéroport de Beauvais">Aéroport de Beauvais</option>
          </optgroup>
        </select><br>
        <section id="vol">
          <label id="terminal" for="terminaux">Terminal</label>
          <select class="terminaux" name="aeroport2">
            <optgroup label="Votre Terminal">
              <option value="sud">Sud</option>
              <option value="ouest">Ouest</option>
              <option value="1">1</option>
              <option value="2A">2A</option>
              <option value="2C">2C</option>
              <option value="2D">2D</option>
              <option value="2E">2E</option>
              <option value="2F">2F</option>
              <option value="2G">2G</option>
              <option value="3">3</option>
              <option value="T1">T1</option>
              <option value="T2">T2</option>
              <option value="St Exu">ST Ex</option>
            </optgroup>
          </select>
        </section>
      </div><br>
       <div class="baby">
         <label for="">Siège bébé/Réhausseur</label>
         <select class="" name="rehausseur">
           <option value="non">Non</option>
           <option value="oui">Oui</option>
         </select>
          <label for="">Nombres de Baggages</label>
          <select class="baggages" name="nbBaggages">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
       </div>

      <div class="">
        <label for="personne"> nombres de personnes :</label>
        <select class="personnes" name="nbPer">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select> |
        <label for="horaires">heure de depart :</label>
        <select name="horairesAe">
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
     <input type="submit" id='validation'  value="Reservez">
   </form>
</div>
<div class="confirmation">
  <div class="modal">
    <h1>Votre reservation</h1>
      <form class="infosResa" action="aeroport.php" method="post">
      <div class="">
        <div class="label">
          <label for="Nom">Nom:</label>
          <?php echo '<input type="text" name="" value="'.$_POST['nomAe'].'" disabled="disabled">'; ?>
        </div>
        <div class="label">
          <label for="Nom">Prenom:</label>
          <?php echo '<input type="text" name="" value="'.$_POST['firstnameAe'].'" disabled="disabled">'; ?>
        </div>
      </div>
      <div class="">
        <div class="label">
          <label for="Nom">Depart de:</label>
          <?php echo '<input type="text" name="" value="'.$_POST['departAe'].'" disabled="disabled">'; ?>
        </div>
        <div class="label">
          <label for="Nom">Arrivee à:</label>
          <?php echo '<input type="text" name="" value="'.$_POST['arriveeAe'].'" disabled="disabled">'; ?>
        </div>
      </div>
      <div class="">
        <div class="label">
          <label for="Nom">Horaire de depart:</label>
          <?php echo '<input type="text" name="" value="'.$_POST['horairesAe'].'" disabled="disabled">'; ?>
        </div>
        <div class="label">
          <label for="Nom">Nombres de personnes:</label>
          <?php echo '<input type="text" name="" value="'.$_POST['nbPer'].'" disabled="disabled">'; ?>
        </div>
      </div>
      <div class="">
        <div class="label">
          <label for="Nom">Nombres de baggages:</label>
          <?php echo '<input type="text" name="" value="'.$_POST['nbBaggages'].'" disabled="disabled">'; ?>
        </div>
        <div class="label">
          <label for="Nom">Réhausseur et/ou siège bébé:</label>
          <?php echo '<input type="text" name="" value="'.$_POST['rehausseur'].'" disabled="disabled">'; ?>
        </div>
      </div>
      </form>
    <div class="boutons">
      <button id="annulation" class="boutonModal" type="button" name="button">Annuler</button>
      <button class="boutonModal" type="button" name="button">Confirmer</button>
    </div>
  </div>
</div>
<?php require 'mode_paiement.php'; ?>
<?php require '../app/form.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="../js/bd.js"></script>
