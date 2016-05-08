

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <ul class="right hide-on-med-and-down"> 

      <?php
        require_once '../model/ModelPerson.php';

        $isAdmin = ModelPerson::isAdmin();
        if ($isAdmin){
          print  '<li><a href="client.php">Clients</a></li>';
          print '<li><a href="evenements.php">Evènements</a></li> ';
          print '<li><a href="preinscr.php">Pré-inscriptions</a></li>';
          print '<li><a href="#">Déconnexion</a></li>';
        }
        else{
          print '<li><a href="mesinscription.php">Mes inscriptions</a></li>';
          print '<li><a href="#">Déconnexion</a></li>';
        }
        ?>

      </ul>
     
     <a id="logo-container" href="accueil.php" class="brand-logo">Accueil</a>
     
      <ul id="nav-mobile" class="side-nav">

<?php
      require_once '../model/ModelPerson.php';

        $isAdmin = ModelPerson::isAdmin();
        if ($isAdmin){
          print '<li><a href="client.php">Clients</a></li>';
          print '<li><a href="evenements.php">Evènements</a></li>';
          print '<li><a href="preinscr.php">Pré-inscriptions</a></li>';
          print '<li><a href="#">Déconnexion</a></li>';
        }
        else{
          print '<li><a href="mesinscription.php">Mes inscriptions</a></li>';
          print '<li><a href="#">Déconnexion</a></li>';
        }
        ?>
        
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

