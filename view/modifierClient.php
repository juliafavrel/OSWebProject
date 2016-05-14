<?php include("head.php"); ?>

<?php include("entete.php"); ?>

  <div class="container">
    <div class="section">

    <h1>Modification de client</h1>

      <div class="row">




        <form method="post" action="../controller/editPerson.php" class="col s12">
    

            <input type="hidden" name="idPerson" value="<?php echo $_POST['idPerson']?>">

             <div class="input-field col s12">
              <input  placeholder="<?php echo $_POST['firstName']?>" id="firstName" name="firstName" type="text" class="validate">
              <label for="firstName">Prénom</label>
            </div>

            <div class="input-field col s12">
             <input placeholder="<?php echo $_POST['lastName']?>" id="lastName" name="lastName" type="text" class="validate">
              <label for="lastName">Nom</label>
            </div>

            <div class="input-field col s12">
                <input placeholder="<?php echo $_POST['mail']?>" id="mail" name="mail" type="email" class="validate">
                <label for="mail">Email</label>
          </div>

          <div class="input-field col s12">
             <input placeholder="<?php echo $_POST['phone']?>" id="phone" name="phone" type="text" class="validate">
              <label for="phone">Telephone</label>
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