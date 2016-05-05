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
              <th data-field="id">N°</th>
              <th data-field="nomevt">Nom</th>
              <th data-field="lieuevt">Lieu</th>
              <th data-field="dateevt">Date</th>
              <th data-field="prixevt">Prix</th>
              <th data-field="desc">Decription</th>
              <th data-field="placerestevt">Places restantes</th>
          </tr>
        </thead>

        <tbody>
         <?php
         
            require_once  '../model/ModelEvent.php';

            $events = ModelEvent::getAllEvents();

            foreach($events as $event) {

             print "<tr> <td>" .  $event["idEvt"] . "</td>";
             print "<td>" .  $event["nameEvt"] . "</td>";
             print "<td>" .  $event["placeEvt"] . "</td>";
             print "<td>" .  $event["dateEvt"] . "</td>";
             print "<td>" .  $event["priceEvt"] . "€" . "</td>";
             print "<td>" .  $event["descEvt"] . "</td>";
             print "<td>" .  $event["nbEvt"] . "</td> </tr>";

             


            /*<td>   <a href="editevt.php" class="btn-floating btn-small waves-effect waves-light pink darken-3"><i class="material-icons">mode_edit</i></a>

            </td>
            <td> <a class="btn-floating btn-small waves-effect waves-light pink darken-3"><i class="material-icons">delete</i></a>
            </td>
          </tr>*/
        }

?>
          
        </tbody>
      </table>
      
    <p class="center">
      <a href="ajoutevt.php"><button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action">
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
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>