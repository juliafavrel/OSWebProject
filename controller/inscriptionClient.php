 <?php 
    require_once  '../model/ModelPreRegistr.php';


    $tab=array(
                  'idEvent' => $_GET['idEvent'],
                  'idClient' => $_COOKIE['idPerson'],
              );

    $ok= ModelPreRegistr::checkInscription($_GET['idEvent']);
    
    if($ok){
    	ModelPreRegistr::preInscription($tab);
    }
    else{
    	echo 'Vous êtes déjà inscrit à cet évènement,
    	<br>
    	Pour revenir en arrière cliquez <a href="../view/accueil.php">ici</a>. ';
    }
?>