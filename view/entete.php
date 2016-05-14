<?php

require_once '../model/ModelPerson.php';

if (isset($_COOKIE['idPerson'])){

  $admin=ModelPerson::isAdmin($_COOKIE['idPerson']);
  if ($admin){
      print '<nav class="white" role="navigation">
              <div class="nav-wrapper container">
                <ul class="right hide-on-med-and-down"> 
                  <li><a href="client.php">Clients</a></li>
                  <li><a href="evenements.php">Evènements</a></li> 
                  <li><a href="eventsClasses.php">Participants</a></li> 
                  <li><a href="preinscr.php">Pré-inscriptions</a></li>
                  <li><a href="inscription.php">Inscriptions</a></li>
                  <li><a href="../controller/deconnexion.php">Déconnexion</a></li>
               </ul>
             
                  <a id="logo-container" href="accueil.php" class="brand-logo">Accueil</a>
                 

                  <ul id="nav-mobile" class="side-nav">
                    <li><a href="client.php">Clients</a></li>
                    <li><a href="evenements.php">Evènements</a></li> 
                    <li><a href="eventsClasses.php">Participants</a></li> 
                    <li><a href="preinscr.php">Pré-inscriptions</a></li>
                    <li><a href="inscription.php">Inscriptions</a></li>
                    <li><a href="../controller/deconnexion.php">Déconnexion</a></li>
                  </ul>
                  <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
              </nav>';
  }
  else{
        print '<nav class="white" role="navigation">
                <div class="nav-wrapper container">
                 <ul class="right hide-on-med-and-down"> 
                    <li><a href="mesinscription.php">Mes inscriptions</a></li>
                    <li><a href="../controller/deconnexion.php">Déconnexion</a></li>
                  </ul>
                 
                  <a id="logo-container" href="accueil.php" class="brand-logo">Accueil</a>
                 

                  <ul id="nav-mobile" class="side-nav">
                    <li><a href="mesinscription.php">Mes inscriptions</a></li>
                    <li><a href="../controller/deconnexion.php">Déconnexion</a></li>
                  </ul>
                  <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
              </nav>';

  }
}  
else{
     print '<nav class="white" role="navigation">
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
  </nav>';

}
  

?>






