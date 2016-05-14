  
<?php include("head.php"); ?>

<?php include("entete.php"); ?>       



  <div class="container">
    <div class="section">

      <h1> Recherche liée à "<?php echo $_GET['search'] ?> "</h1>

            <table class="bordered">
                    <thead>
                      <tr>
                          
                          <th data-field="nomcli">Nom</th>
                          <th data-field="prenomcli">Prénom</th>
                          <th data-field="dateNaiss">Date de Naissance</th>
                          <th data-field="emailcli">Email</th>
                          <th data-field="telcli">Téléphone</th>

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

                          $admin=ModelPerson::isAdmin($data["idPerson"]);
                          if ($admin){

                          }
                          else{
                           print "<tr> <td>" .  $data["lastName"] . "</td>";
                           print "<td>" .  $data["firstName"] . "</td>";
                           print "<td>" .  $data["birthDate"] . "</td>";
                           print "<td>" .  $data["mail"] . "</td>";
                           print "<td>" .  $data["phone"] . "</td> </tr>";
                          }
                        }
                        ?>
                  </tbody>
            </table>

            <p class="center">
             <a href="modifierClient.php" class="btn-floating waves-effect waves-light pink darken-3"><i class="material-icons">mode_edit</i></a>
             <a href="suppClient.php" class="btn-floating btn-small waves-effect waves-light pink darken-3"><i class="material-icons">delete</i></a>
            </p>

      </div>
</div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>