<?php include("head.php"); ?>
<body>
<?php include("entete.php"); ?>

  <div class="container">
    <div class="section" class="bordered">

      <h3 > Mes inscriptions </h3>

       <table>
        <thead>
          <tr>
              <th data-field="nameEvt">Evenement</th>
              <th data-field="placeEvt">Lieu</th>
              <th data-field="dateEvt">Date</th>
              <th data-field="priceEvt">Prix</th>
              <th data-field="descEvt">Description</th>
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
               print "<td>" .  $line["descEvt"] . "</td> </tr>";
             } 
                
          ?>
          
        </tbody>
      </table>
</div>

<p></p>


<div class="section" class="bordered">

       <h3> Mes inscriptions en attente de validation </h3>

       <table>
        <thead>
          <tr>
              <th data-field="idEvt">Evenement</th>
              <th data-field="placeEvt">Lieu</th>
              <th data-field="dateEvt">Date</th>
              <th data-field="priceEvt">Prix</th>
              <th data-field="descEvt">Description</th>
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
               print "<td>" .  $line["descEvt"] . "</td> </tr>";
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