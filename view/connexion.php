
<?php include("head.php"); ?>

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
     <ul class="right hide-on-med-and-down"> 
        <li><a href="connexion.php">Connexion</a></li>
      </ul>
     
      <a id="logo-container" href="accueil.php" class="brand-logo">Accueil</a>
     

      <ul id="nav-mobile" class="side-nav">
        <li><a href="connexion.php">Connexion</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <div class="row">
    <form method="post" action="../controller/connexion.php" accept-charset="utf-8">

        <div class="card-panel lighten-2">
          <span >
				<p>
					<label for="idPerson">Pseudo :</label><input name="idPerson" type="text" id="idPerson" class="validate" />
						<br />
				<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" class="validate" />
				</p>
				</fieldset>
				<p class="center">
				  	<button class=" btn waves-effect waves-light "type="submit" name="connexion">
							<i class="material-icons right">
					 			send
					 		</i>
					 		Connexion
					</button>
				</p>
				
				<p class="center">	
					<a href="register.php">S'inscrire ?</a>
				</p>

          </span>
        </div>
   	</form>	
   </div>	


</body>
</html>'