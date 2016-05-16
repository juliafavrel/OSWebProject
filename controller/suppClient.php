<?php ob_start();
require_once  '../model/ModelPerson.php';

	$idPerson = $_POST['idPerson'];

	$supp=array(
		            'idPerson' => $idPerson,
		        );

	ModelPerson::suppPerson($supp);
	header('Location: ../view/client.php');
		
ob_end_flush(); ?>