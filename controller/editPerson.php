<?php
require_once  '../model/ModelPerson.php';

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

?>