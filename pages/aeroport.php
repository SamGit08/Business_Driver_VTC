  <div id="aile">
    <h1>Trajet aéroport</h1>
    <form class="formulaire2" method="post" action="#"><br>
      <h2>Mes informations</h2>
        <fieldset>
        <label for="name">Nom*:</label>
        <input type="text" name="nomAe" placeholder="entrez votre nom" id='name'>
        <label for="firstname">Prenom*:</label>
        <input type="text" name="firstnameAe" value="" placeholder="entrez votre prenom" id='firstname'><br>
        <label for="email">Email*:</label>
        <input type="" name="mailAe" value="" placeholder="ex:driver@gmail.com">
      </fieldset>
      <hr>
      <h2>Mon trajet</h2>
      <fieldset>
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
      </fieldset>
      <fieldset>
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
      </fieldset><br>
       <fieldset>
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
       </fieldset>
      <fieldset>
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
        </select>
        <label for="horaires">heure de depart :</label>
        <input name="horairesAe" id="horairesDepart" type="text">
      </fieldset>
     <button type="button" id='validation'>Reserver</button>
     <div class="boutons">
       <button class="boutonModal" type="button" name="button">Confirmer</button>
       <button id="annulation" class="boutonModal" type="button" name="button">Annuler</button>
     </div>
   </form>
</div>
<?php require 'mode_paiement.php'; ?>
<?php require '../app/form.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="../js/bd.js"></script>
