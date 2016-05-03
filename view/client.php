
 <?php include("head.php"); ?>

<?php include("entete.php"); ?>


<!--Barre de recherche-->

    <form method="get" action="../view/search.php" accept-charset="utf-8" class="col s12" >
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

      <h1> Clients </h1>

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
            $persons = ModelPerson::getAllPerson();

            foreach($persons as $person) {
               print "<tr> <td>" .  $person["idPerson"] . "</td>";
               print "<td>" .  $person["lastName"] . "</td>";
               print "<td>" .  $person["firstName"] . "</td>";
               print "<td>" .  $person["mail"] . "</td>";
               print "<td>" .  $person["phone"] . "</td> </tr>";
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


 <?php include("image-deroulante.php"); ?>

 <?php include("footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>