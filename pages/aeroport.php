
  <div id="aile">
    <h1>Trajet aéroport</h1>
    <form class="formulaire2" method="post" action="../app/form.php"><br>
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
        <input type="text" name="departAe" value="" id="go" required="" placeholder="entrez votre lieu de depart"><label for="selection" id='choix1'>ou aeroport:</label>
        <select value="choisir un aeroport" name="aeroportAeD">
          <option id="cdg"value="cdg">Paris/Roissy-Charles deGaulle</option>
          <option id="aeroportOrly" value="2">Paris/Orly</option>
          <option id="beauvaisAero" value="3">Aeroport Beauvais</option>
        </select><br>
        <section id="vol">
          <label id="terminal" for="terminaux">terminal:</label>
          <select class="terminaux" name="aeroport">
            <option class="orly" value="sud">sud</option>
            <option class="orly" value="ouest">ouest</option>
            <option class="charles"value="1">1</option>
            <option class="charles" value="2A">2A</option>
            <option class="charles" value="2C">2C</option>
            <option class="charles" value="2D">2D</option>
            <option class="charles" value="2F">2F</option>
            <option class="charles" value="2G">2G</option>
            <option class="charles" value="3">3</option>
            <option class="beauvais" value="T1">T1</option>
            <option class="beauvais" value="T2">T2</option>
          </select>
        </section>
      </div>
      <div class="">
        <label for="arrivée">Arrivée*:</label>
        <input type="text" name="arriveeAe" value="" id="arrivee" placeholder="entrez votre lieu d'arrivée">
        <label for="selection" id='choix2'>ou aeroport:</label>
        <select class="two" name="aeroportAeA" id='selection'>
          <option value="1" class="charles">Paris/Roissy-Charles deGaulle</option>
          <option value="2">Paris/Orly</option>
          <option value="3">Aéroport Beauvais</option>
        </select><br>
        <section id="vol">
          <label id="terminal" for="terminaux">terminal:</label>
          <select class="terminaux" name="aeroport">
            <option class="orly" value="sud">sud</option>
            <option class="orly" value="ouest">ouest</option>
            <option class="charles"value="1">1</option>
            <option class="charles" value="2A">2A</option>
            <option class="charles" value="2C">2C</option>
            <option class="charles" value="2D">2D</option>
            <option class="charles" value="2F">2F</option>
            <option class="charles" value="2G">2G</option>
            <option class="charles" value="3">3</option>
            <option class="beauvais" value="T1">T1</option>
            <option class="beauvais" value="T2">T2</option>
            <option class="beauvais" value="exu">ST EXU</option>
          </select>
        </section>
      </div><br>
       <div class="baby">
         <label for="">siege bebe/rehausseur</label>
          <input class='radio' type="radio" name="radio" value="">oui
          <input class='radio' type="radio" name="radio" value="" checked="">non |
          <label for=""> nombres de bagages:</label>
          <select class="bagages" name="">
            <option value="B1">1</option>
            <option value="B2">2</option>
            <option value="B3">3</option>
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
<?php require 'mode_paiement.php'; ?>
<?php require 'footer.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="../js/bd.js"></script>
