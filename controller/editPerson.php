<?php

require_once  '../model/ModelPerson.php';

	/*try{
		if (isset($_POST['id']) AND 
			isset($_POST['firstName']) AND 
			isset($_POST['lastName'])  AND 
			isset($_POST['mail']) AND 
			isset($_POST['phone']) ) 
		{*/
				$idPerson = htmlspecialchars($_POST['id']);
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
		//}
					ModelPerson::editPerson($tab);
		/*else{
				echo "Veuillez remplir tous les champs."
			}
	}
	catch(Exception $e)
	{
	echo 'Erreur dans l\'écriture du message. Veuillez vérifier les champs.';
	}*/

?>