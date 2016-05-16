<?php
require_once  '../model/ModelPerson.php';

	//Vérification des champs obligatoires
	if( ($_POST['firstName'] == '')  OR ($_POST['lastName'] == '') OR ($_POST['mail'] == '') OR ($_POST['phone'] == '')){
		echo '<p class"center">Veuillez remplir tous les champs.
			<br>
			Cliquez <a href="../view/client.php">ici</a> pour revenir en arrière.</p>';
	}
	else{
			$idPerson = $_POST['idPerson'];
			$firstName = htmlspecialchars($_POST['firstName']);
			$lastName = htmlspecialchars($_POST['lastName']);
			$mail = htmlspecialchars($_POST['mail']);
			$phone = htmlspecialchars($_POST['phone']); 
			$tab=array(
				            'idPerson' => $idPerson,
				            'firstName' => $firstName,							
							'lastName' => $lastName,	
				            'mail' => $mail,
				            'phone' => $phone,
				        );

				ModelPerson::editPerson($tab);

			header('Location: ../view/client.php');


		}

?>