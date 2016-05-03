<?php include("head.php"); ?>

<?php include("entete.php"); ?>



  <div class="container">
    <div class="section">
      <h1> Modifier le profil d'un client</h1>
       <div class="row">
    <form class="col s12">
      <div class="row">

        <div class="input-field col s12">
          <input  id="prenom" type="text" class="validate">
          <label for="prenom">Prénom</label>
        </div>

        <div class="input-field col s12">
         <input id="nom" type="text" class="validate">
          <label for="nom">Nom</label>
        </div>


		<div class="valign-wrapper col s3">
			<p class="valign"><font color='grey'> Date de naissance </font></p>
		</div>

      	<div class="input-field col s12">
         <input id="datnaiss" type="date" class="validate">
          <label for="datenaiss"></label>
        </div>

	      <div class="input-field col s12">
	          <input id="email" type="email" class="validate">
	          <label for="email">Email</label>
	    </div>

	    <div class="input-field col s12">
         <input id="tel" type="text" class="validate">
          <label for="tel">Telephone</label>
        </div>
      
    </form>
  </div>





      
    <p class="center">
      <button class="btn waves-effect waves-light thin" type="submit" name="action">
          Enregistrer
      </button>
    </p>

    </div>
  </div>


 <?php include("image-deroulante.php"); ?>

 <?php include("footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>