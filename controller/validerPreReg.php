 <?php

require_once  '../model/ModelPreRegistr.php';

	$idClient = htmlspecialchars($_POST['idClient']);
	$idEvent = htmlspecialchars($_POST['idEvent']);
	
	$valider=array(
		            'idClient' => $idClient,
		            'idEvent' => $idEvent,
		        );
	
	ModelPreRegistr::validerPreReg($valider);
	header('Location: ../view/preinscr.php');
?>