<?php include("head.php"); ?>

<?php include("entete.php"); ?>


<!--Barre de recherche-->

    <form method="get" action="../view/searchPerson.php" accept-charset="utf-8" class="col s12" >
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
              <th data-field="nomcli">Nom</th>
              <th data-field="prenomcli">Prénom</th>
              <th data-field="emailcli">Email</th>
              <th data-field="telcli">Téléphone</th>
              <th data-field="modif"></th>
              <th data-field="suppr"></th>
          </tr>
        </thead>

        <tbody>
            
          <?php 


            require_once  '../model/ModelPerson.php';
            $persons = ModelPerson::getAllPerson();
            foreach($persons as $person) {

              $admin=ModelPerson::isAdmin($person["idPerson"]);
              if ($admin){

              }
              else{
               print "<tr> ";
               print "<td>" .  $person["lastName"] . "</td>";
               print "<td>" .  $person["firstName"] . "</td>";
               print "<td>" .  $person["mail"] . "</td>";
               print "<td>" .  $person["phone"] . "</td> ";

               //bouton modifier
               print  '
               <form method="post" action="modifierClient.php">
                 <input type="hidden" name="idPerson" value="' .$person["idPerson"]. '">
                 <input type="hidden" name="lastName" value="' .$person["lastName"]. '">
                 <input type="hidden" name="firstName" value="' .$person["firstName"]. '">
                 <input type="hidden" name="mail" value="' .$person["mail"]. '">
                 <input type="hidden" name="phone" value="' .$person["phone"]. '">
                 <td><button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action"><i class="material-icons">mode_edit</i></button></td>
               </form>';

               //Bouton supprimer
              print '<form method="post" action="../controller/suppClient.php">
                 <input type="hidden" name="idPerson" value="' .$person["idPerson"]. '">
                <td><button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action"><i class="material-icons">delete</i></button></td>
                </form>';


               print "</tr>";
             }
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