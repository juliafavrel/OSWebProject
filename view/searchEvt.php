  
<?php include("head.php"); ?>

<?php include("entete.php"); ?>       



  <div class="container">
    <div class="section">

      <h1> Recherche liée à "<?php echo $_GET['search'] ?> "</h1>

            <table class="bordered">
                    <thead>
                      <tr>
                        <th data-field="nomevt">Nom</th>
                        <th data-field="lieuevt">Lieu</th>
                        <th data-field="dateevt">Date</th>
                        <th data-field="prixevt">Prix</th>
                        <th data-field="desc">Decription</th>
                        <th data-field="placerestevt">Places restantes</th>
                          <!--<th data-field="modif"></th>
                          <th data-field="suppr"></th>-->
                      </tr>
                    </thead>

                    <tbody>

                      <?php 
                        require_once  '../model/ModelEvent.php';

                        $tab=array(
                                      'search' => $_GET['search'],
                                  );

                        $datas = ModelEvent::searchEvt($tab);
                        foreach($datas as $data) {
                           print "<tr> <td>" .  $data["nameEvt"] . "</td>";
                           print "<td>" .  $data["placeEvt"] . "</td>";
                           print "<td>" .  $data["dateEvt"] . "</td>";
                           print "<td>" .  $data["priceEvt"] . "</td>";
                           print "<td>" .  $data["descEvt"] . "</td>";
                           print "<td>" .  $data["nbEvt"] . "</td> </tr>";
                          }
                        ?>
                  </tbody>
            </table>
      </div>
</div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>