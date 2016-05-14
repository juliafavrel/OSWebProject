<?php include("head.php"); ?>

<?php include("entete.php"); ?>

  <div class="container">
    <div class="section">

    <h1>Modification d'un évènement</h1>

      <div class="row">
         <form method="post" action="../controller/editEvent.php" class="col s12">

            <input type="hidden" name="idEvt" value="<?php echo $_POST['idEvt']?>">

             <div class="input-field col s12">
              <input  placeholder="<?php echo $_POST['nameEvt']?>" id="nameEvt" name="nameEvt" type="text" class="validate">
              <label for="nameEvt">Evènement</label>
            </div>

            <div class="input-field col s12">
             <input placeholder="<?php echo $_POST['placeEvt']?>" id="placeEvt" name="placeEvt" type="text" class="validate">
              <label for="placeEvt">Lieu</label>
            </div>

              <div class="valign-wrapper col s3">
                <p class="valign"><font color='grey'> Date </font></p>
              </div>

              
            <div class="input-field col s12">
                <input placeholder="<?php echo $_POST['dateEvt']?>" id="dateEvt" name="dateEvt" type="date" class="validate">
                <label for="dateEvt"></label>
          </div>

          <div class="input-field col s12">
             <input placeholder="<?php echo $_POST['priceEvt']?>" id="priceEvt" name="priceEvt" type="text" class="validate">
              <label for="priceEvt">Prix</label>
            </div>

          <div class="input-field col s12">
             <input placeholder="<?php echo $_POST['descEvt']?>" id="descEvt" name="descEvt" type="text" class="validate">
              <label for="descEvt">Description</label>
            </div>

           <div class="input-field col s12">
             <input placeholder="<?php echo $_POST['nbEvt']?>" id="nbEvt" name="nbEvt" type="text" class="validate">
              <label for="nbEvt">Places Disponibles</label>
            </div>
          
            
          
        
      </div>

    <p class="center">
      <button class="btn waves-effect waves-light thin" type="submit" name="editEvt">
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