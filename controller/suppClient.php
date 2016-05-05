<?php

require_once  '../model/ModelPerson.php';

	/*try{
		if (isset($_POST['id']) AND 
			isset($_POST['firstName']) AND 
			isset($_POST['lastName'])  AND 
			isset($_POST['mail']) AND 
			isset($_POST['phone']) ) 
		{*/
				$idPerson = $_POST['idPerson'];

				$supp=array(
					            'idPerson' => $idPerson,
					        );
		//}
					ModelPerson::suppPerson($supp);

					include("../view/client.php");
		/*else{
				echo "Veuillez remplir tous les champs."
			}
	}
	catch(Exception $e)
	{
	echo 'Erreur dans l\'écriture du message. Veuillez vérifier les champs.';
	}*/

?>