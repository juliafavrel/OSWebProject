<?php include("head.php"); ?>

<?php include("entete.php"); ?>

    <form method="get" action="../view/searchEvt.php" accept-charset="utf-8" class="col s12" >
      <div class="row">
        <div class="input-field col s3 offset-s9">

         <i class="material-icons prefix">search</i>

          <input id="search" name="search" type="text" class="validate">
          <label for="search">Rechercher</label>

        </div>
      </div>
    </form>


  <div class="container">
    <div class="section">

      <h1> Evènements </h1>

       <table class="bordered">
        <thead>
          <tr>
              <th data-field="nomevt">Nom</th>
              <th data-field="lieuevt">Lieu</th>
              <th data-field="dateevt">Date</th>
              <th data-field="prixevt">Prix</th>
              <th data-field="desc">Decription</th>
              <th data-field="placerestevt">Places restantes</th>
              <th data-field="edit"></th>
              <th data-field="supp"></th>
          </tr>
        </thead>

        <tbody>
         <?php
         
            require_once  '../model/ModelEvent.php';

            $events = ModelEvent::getAllEvents();

            foreach($events as $event) {

             print "<tr>";
             print "<td>" .  $event["nameEvt"] . "</td>";
             print "<td>" .  $event["placeEvt"] . "</td>";
             print "<td>" .  $event["dateEvt"] . "</td>";
             print "<td>" .  $event["priceEvt"] . "€" . "</td>";
             print "<td>" .  $event["descEvt"] . "</td>";
             print "<td>" .  $event["nbEvt"] . "</td>";

              //bouton modifier
               print  '
               <form method="post" action="modifierEvt.php">
                 <input type="hidden" name="idEvt" value="' .$event["idEvt"]. '">
                 <input type="hidden" name="nameEvt" value="' .$event["nameEvt"]. '">
                 <input type="hidden" name="placeEvt" value="' .$event["placeEvt"]. '">
                 <input type="hidden" name="priceEvt" value="' .$event["priceEvt"]. '">
                 <input type="hidden" name="descEvt" value="' .$event["descEvt"]. '">
                 <input type="hidden" name="nbEvt" value="' .$event["nbEvt"]. '">
                 <td><button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action"><i class="material-icons">mode_edit</i></button></td>
               </form>';

               //Bouton supprimer
              print '<form method="post" action="../controller/suppEvt.php">
                 <input type="hidden" name="idEvt" value="' .$event["idEvt"]. '">
                <td><button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action"><i class="material-icons">delete</i></button></td>
                </form>';


               print "</tr>";
             } 
                
          ?>
          
        </tbody>
      </table>
      
    <p class="center">
      <a href="ajoutevt.php">
        <button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action">
          Ajouter
        </button>
      </a>
    </p>

    </div>
  </div>


 <?php include("image-deroulante.php"); ?>

 <?php include("footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>