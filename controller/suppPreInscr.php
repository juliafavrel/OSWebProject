<?php ob_start();

require_once  '../model/ModelPreRegistr.php';


if( ($_POST['idClient'] == '') OR ($_POST['idEvent'] == '') ){
	echo "Veuillez remplir tous les champs.<br>";
	echo 'Cliquez <a href="../view/suppPreInscr.php">ici</a> pour recommencer.';
}
else{

	$idClient = htmlspecialchars($_POST['idClient']);
	$idEvent = htmlspecialchars($_POST['idEvent']);
	
	$supp=array(
		            'idClient' => $idClient,
		            'idEvent' => $idEvent,
		        );

		ModelPreRegistr::suppPreInscr($supp);
}

					
ob_end_flush(); ?>