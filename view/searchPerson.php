  
<?php include("head.php"); ?>

<?php include("entete.php"); ?>       



  <div class="container">
    <div class="section">

      <h1> Recherche liée à "<?php echo $_GET['search'] ?> "</h1>

            <table class="bordered">
                    <thead>
                      <tr>
                          <th data-field="id">N°</th>
                          <th data-field="nomcli">Nom</th>
                          <th data-field="prenomcli">Prénom</th>
                          <th data-field="emailcli">Email</th>
                          <th data-field="telcli">Téléphone</th>
                          <!--<th data-field="modif"></th>
                          <th data-field="suppr"></th>-->
                      </tr>
                    </thead>

                    <tbody>

                      <?php 
                        require_once  '../model/ModelPerson.php';

                        $tab=array(
                                      'search' => $_GET['search'],
                                  );

                        $datas = ModelPerson::searchPerson($tab);
                        foreach($datas as $data) {
                           print "<tr> <td>" .  $data["idPerson"] . "</td>";
                           print "<td>" .  $data["lastName"] . "</td>";
                           print "<td>" .  $data["firstName"] . "</td>";
                           print "<td>" .  $data["mail"] . "</td>";
                           print "<td>" .  $data["phone"] . "</td> </tr>";
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