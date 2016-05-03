<?php include("head.php"); ?>

<?php include("entete.php"); ?>



  <div class="container">
    <div class="section">
      <h1> Modifier un évènement</h1>

       <div class="row">
  


        <div class="input-field col s12">
          <input  id="nomevt" type="text" class="validate">
          <label for="nomevt">Nom</label>
        </div>

        <div class="input-field col s12">
         <input id="lieuevt" type="text" class="validate">
          <label for="lieuevt">Lieu</label>
        </div>


		<div class="valign-wrapper col s3">
			<p class="valign"><font color='grey'> Date </font></p>
		</div>

      	<div class="input-field col s12">
         <input id="dateevt" type="date" class="validate">
          <label for="dateevt"></label>
        </div>

	      <div class="input-field col s12">
	          <input id="prixevt"  type="text" class="validate">
	          <label for="prixevt">Prix</label>
	    </div>

	    <div class="input-field col s12">
         <input id="decrsevt" type="text" class="validate">
          <label for="descrevt">Description</label>
        </div>

         <div class="input-field col s12">
            <input id="placerestevt" type="text" class="validate">
            <label for="placedispoevt">Places disponibles</label>
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