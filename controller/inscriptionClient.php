 <?php 
    require_once  '../model/ModelPreRegistr.php';
    require_once  '../model/ModelRegistr.php';


    $tab=array(
                  'idEvent' => $_POST['idEvent'],
                  'idClient' => $_POST['idClient'],
              );

    //Vérifie si a deja fait une demande d'inscription
    $okPre= ModelPreRegistr::checkInscription($tab);
    if($okPre){

      //Vérifie si est déja inscrit et validé
      $okReg=ModelRegistr::checkReg($tab);
      if ($okReg) {

        ModelPreRegistr::preInscription($tab);
      }
      else{
        
        echo 'Vous êtes déjà inscrit à cet évènement,
        <br>
        Pour revenir en arrière cliquez <a href="../view/accueil.php">ici</a>. ';
      }
    	
    }
    else{
    	echo "Vous avez déja fait une demande d'inscription à cet évènement.";
    	echo "<br>";
    	echo 'Pour revenir en arrière cliquez <a href="../view/accueil.php">ici</a>. ';
    }
?>