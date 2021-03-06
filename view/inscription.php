<?php include("head.php"); ?>

<?php include("entete.php"); ?>


<!--Barre de recherche
    <form method="get" action="../view/searchInscription.php" accept-charset="utf-8" class="col s12" >
      <div class="row">
        <div class="input-field col s3 offset-s9">

         <i class="material-icons prefix">search</i>

          <input id="search" name="search" type="text" class="validate">
          <label for="search">Rechercher</label>

        </div>
      </div>
    </form>-->

<!--Tableau des inscriptions-->
  <div class="container">
    <div class="section">

      <h2>Inscriptions validées</h2>

       <table class="bordered">
        <thead>
          <tr>
              <th data-field="nomcli">Nom</th>
              <th data-field="prenomcli">Prénom</th>
              <th data-field="nomevnt">Evenement</th>
              <th data-field="lieuevt">Lieu</th>
              <th data-field="dateevt">Date</th>
              <th data-field="supp"></th>
              
          </tr>
        </thead>

        <tbody>
          
            <?php 

            require_once  '../model/ModelRegistr.php';
            
            $registr = ModelRegistr::getAllRegistr();

            foreach($registr as $line) {
               print "<tr> <td>" .  $line["lastName"] . "</td>";
               print "<td>" .  $line["firstName"] . "</td>";
               print "<td>" .  $line["nameEvt"] . "</td>";
               print "<td>" .  $line["placeEvt"] . "</td>";
               print "<td>" .  $line["dateEvt"] . "</td>";

               //Bouton supprimer
               print '<form method="post" action="../controller/suppInscription.php" accept-charset="utf-8">
                       <input type="hidden" name="idClient" value="'.$line["idClient"].'"> 
                       <input type="hidden" name="idEvent" value="' .$line["idEvent"].'" >';
               print "<td>" .  ' <button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action"><i class="material-icons">delete</i></button>'. "</td> </tr>";
               print '</form>';


             } 
                
          ?>
    
        </tbody>
      </table>
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