<?php ob_start();

require_once  '../model/ModelPreRegistr.php';

	$idClient = htmlspecialchars($_POST['idClient']);
	$idEvent = htmlspecialchars($_POST['idEvent']);
	
	$supp=array(
		            'idClient' => $idClient,
		            'idEvent' => $idEvent,
		        );

	ModelPreRegistr::suppPreInscr($supp);

	header('Location: ../view/mesinscription.php');

					
ob_end_flush(); ?>