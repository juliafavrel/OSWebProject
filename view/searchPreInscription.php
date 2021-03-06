<?php include("head.php"); ?>

<?php include("entete.php"); ?>


<!--Tableau des inscriptions-->
  <div class="container">
    <div class="section">

      <h2> Recherche liée à "<?php echo $_GET['search'] ?> "</h2>

       <table class="bordered">
        <thead>
          <tr>
              <th data-field="id">N°Client</th>
              <th data-field="id">N°Event</th>
              <th data-field="nomcli">Nom</th>
              <th data-field="prenomcli">Prénom</th>
              <th data-field="nomevnt">Evenement</th>
              <th data-field="lieuevt">Lieu</th>
              <th data-field="dateevt">Date</th>
              
          </tr>
        </thead>

        <tbody>
          
            <?php 

            require_once  '../model/ModelPreRegistr.php';

            $tab=array(
                'search' => $_GET['search'],
            );
            
            $registr = ModelPreRegistr::searchPreInscription($tab);

            foreach($registr as $line) {
               print "<tr> <td>" .  $line["idClient"] . "</td>";
               print "<td>" .  $line["idEvent"] . "</td>";
               print "<td>" .  $line["lastName"] . "</td>";
               print "<td>" .  $line["firstName"] . "</td>";
               print "<td>" .  $line["nameEvt"] . "</td>";
               print "<td>" .  $line["placeEvt"] . "</td>";
               print "<td>" .  $line["dateEvt"] . "</td> </tr>";
             } 
                
          ?>
    
        </tbody>
      </table>


    <p class="center">
       <a href="suppInscription.php">
        <button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action">
          Supprimer
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