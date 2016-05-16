<?php

require_once  '../model/ModelEvent.php';


	if( ($_POST['nameEvt'] == '')  OR ($_POST['placeEvt'] == '') OR ($_POST['dateEvt'] == '' ) OR ($_POST['priceEvt'] == '') OR ($_POST['descEvt'] == '') OR ($_POST['nbEvt'] == '')) {
		echo 'Veuillez remplir tous les champs.
		<p>Cliquez <a href="../view/ajoutevt.php">ici</a> pour recommencer.</p>';
		
	}
	else{
	    $nameEvt = htmlspecialchars($_POST['nameEvt']);
		$placeEvt = htmlspecialchars($_POST['placeEvt']);
		$dateEvt = htmlspecialchars($_POST['dateEvt']);
		$priceEvt = htmlspecialchars($_POST['priceEvt']);
		$descEvt = htmlspecialchars($_POST['descEvt']);
		$nbEvt = htmlspecialchars($_POST['nbEvt']);  

		$tab=array(
			            'nameEvt' => $nameEvt,
			            'placeEvt' => $placeEvt,
						'dateEvt' => $dateEvt,
			            'priceEvt' => $priceEvt,
			            'descEvt' => $descEvt,
			            'nbEvt' => $nbEvt,
			        );
		
		ModelEvent::addEvent($tab);

		header('Location: ../view/evenements.php');
	}

?>