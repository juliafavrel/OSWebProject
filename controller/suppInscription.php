<?php ob_start();

require_once  '../model/ModelRegistr.php';

	$idClient = htmlspecialchars($_POST['idClient']);
	$idEvent = htmlspecialchars($_POST['idEvent']);
	
	$supp=array(
		            'idClient' => $idClient,
		            'idEvent' => $idEvent,
		        );

	ModelRegistr::suppInscription($supp);

	header('Location: ../view/eventsClasses.php');
					
ob_end_flush(); ?>