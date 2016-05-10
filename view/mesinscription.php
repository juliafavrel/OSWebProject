<?php include("head.php"); ?>
<body>
<?php include("entete.php"); ?>

  <div class="container">
    <div class="section" class="bordered">

      <h1> Mes inscriptions </h1>

       <table>
        <thead>
          <tr>
              <th data-field="id">Evenement</th>
              <th data-field="lieu">Lieu</th>
              <th data-field="date">Date</th>
              <th data-field="prix">Prix</th>
              <th data-field="placerest">Description</th>
          </tr>
        </thead>

        <tbody>
           <?php 

            require_once  '../model/ModelRegistr.php';

            $tab=array(
                  'idPerson' => $_COOKIE["idPerson"],
              );

            $registr = ModelRegistr::getMyRegistr($tab);

            foreach($registr as $line) {
               print "<tr> <td>" .  $line["nameEvt"] . "</td>";
               print "<td>" .  $line["placeEvt"] . "</td>";
               print "<td>" .  $line["dateEvt"] . "</td>";
               print "<td>" .  $line["priceEvt"] . "</td>";
               print "<td>" .  $line["nbEvt"] . "</td> </tr>";
             } 
                
          ?>
          
        </tbody>
      </table>





       <h1> Mes inscriptions en attente de validation </h1>

       <table>
        <thead>
          <tr>
              <th data-field="id">Evenement</th>
              <th data-field="lieu">Lieu</th>
              <th data-field="date">Date</th>
              <th data-field="prix">Prix</th>
              <th data-field="placerest">Description</th>
          </tr>
        </thead>

        <tbody>
           <?php 

            require_once  '../model/ModelPreRegistr.php';
              $tab=array(
                  'idPerson' => $_COOKIE["idPerson"],
              );

            $registr = ModelPreRegistr::getMyPreRegistr($tab);

            foreach($registr as $line) {
               print "<tr> <td>" .  $line["nameEvt"] . "</td>";
               print "<td>" .  $line["placeEvt"] . "</td>";
               print "<td>" .  $line["dateEvt"] . "</td>";
               print "<td>" .  $line["priceEvt"] . "</td>";
               print "<td>" .  $line["nbEvt"] . "</td> </tr>";
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