<?php include("head.php"); ?>

<?php include("entete.php"); ?>

  <div class="container">
    <div class="section">

    <h1>Modification de client</h1>

      <div class="row">
        <form method="post" action="../controller/editPerson.php" class="col s12">
          

            <div class="input-field col s12">
              <input placeholder="N° de la personne à modifier" id="id" name="id" type="text" class="validate">
              <label for="id">N°</label>
            </div>

            <div class="input-field col s12">
              <input  id="firstName" name="firstName" type="text" class="validate">
              <label for="firstName">Prénom</label>
            </div>

            <div class="input-field col s12">
             <input id="lastName" name="lastName" type="text" class="validate">
              <label for="lastName">Nom</label>
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
      <button class="btn waves-effect waves-light thin" type="submit" name="editPerson">
        Modifier
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