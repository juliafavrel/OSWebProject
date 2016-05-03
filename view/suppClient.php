<?php include("head.php"); ?>

<?php include("entete.php"); ?>

  <div class="container">
    <div class="section">

    <h1>Suppretion de client</h1>

      <div class="row">
        <form method="post" action="../controller/editPerson.php" class="col s12">
          

            <div class="input-field col s12">
              <input placeholder="N° de la personne à supprimer" id="idPerson" name="idPerson" type="text" class="validate">
              <label for="idPerson">N°</label>
            </div>      
        
      </div>

    <p class="center">
      <button class="btn waves-effect waves-light thin" type="submit" name="suppPerson">
        Supprimer
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