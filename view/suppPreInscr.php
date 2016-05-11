<?php include("head.php"); ?>

<?php include("entete.php"); ?>

  <div class="container">
    <div class="section">

    <h1>Supprimer une demande d'inscription</h1>

      <div class="row">
        <form method="post" action="../controller/suppPreInscr.php" class="col s12">
          

            <div class="input-field col s12">
              <input placeholder="N° du client" id="idClient" name="idClient" type="text" class="validate">
              <label for="idClient">N°Client</label>
            </div>      

            <div class="input-field col s12">
              <input placeholder="N° de l'évènement" id="idEvent" name="idEvent" type="text" class="validate">
              <label for="idEvent">N°Event</label>
            </div> 
        
      </div>

    <p class="center">
      <button class="btn waves-effect waves-light thin" type="submit" name="suppEvt">
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