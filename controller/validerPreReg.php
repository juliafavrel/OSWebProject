<?php

require_once  '../model/ModelPreRegistr.php';


				$idClient = $_POST['idClient'];
				$idEvent = $_POST['idEvent'];

				$valider=array(
					            'idClient' => $idClient,
					            'idEvent' => $idEvent,
					        );
	
					ModelPreRegistr::validerPreReg($valider);

					//include("../view/client.php");
		

?>