<?php include("head.php"); ?>

<?php include("entete.php"); ?>

  <div class="container">
    <div class="section">

    <h1>Inscription</h1>

      <div class="row">
        <form method="post" action="../controller/addPerson.php" class="col s12" accept-charset="utf-8">
          <!--<input type="hidden" value="addPerson" name="action" >-->
        
            <div class="input-field col s12">
              <input placeholder="prenom.nom" id="pseudo" name="pseudo" type="text" class="validate">
              <label for="pseudo">Pseudo</label>
            </div>

           <div class="input-field col s12">
             <input id="password" name="password" type="password" class="validate">
              <label for="password">Mot de passe</label>
            </div>

            <div class="input-field col s12">
             <input id="password1" name="password1" type="password" class="validate">
              <label for="password1">Mot de passe</label>
            </div>


            <div class="input-field col s12">
              <input  id="firstName" name="firstName" type="text" class="validate">
              <label for="firstName">Prénom</label>
            </div>

            <div class="input-field col s12">
             <input id="lastName" name="lastName" type="text" class="validate">
              <label for="lastName">Nom</label>
            </div>


        		<div class="valign-wrapper col s3">
        			<p class="valign"><font color='grey'> Date de naissance </font></p>
        		</div>

          	<div class="input-field col s12">
             <input id="birthDate" name="birthDate" type="date" class="validate">
              <label for="birthDate"></label>
            </div>

    	      <div class="input-field col s12">
    	          <input id="mail" name="mail" type="email" class="validate">
    	          <label for="mail">Email</label>
    	    </div>

    	    <div class="input-field col s12">
             <input id="phone" name="phone" type="text" class="validate">
              <label for="phone">Telephone</label>
            </div>
          
        
      </div>

    <p class="center">
      <button class="btn waves-effect waves-light thin" type="submit" name="addPerson">
        Enregistrer
      </button>
    </p>

    </div>
 <!-- </input>-->
  </form>
  </div>







 <?php include("footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>