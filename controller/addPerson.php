<?php

require  '../model/ModelPerson.php';


//Vérification des champs obligatoires
		if( ($_POST['pseudo'] == '') OR ($_POST['firstName'] == '')  OR ($_POST['lastName'] == '') OR ($_POST['password'] == '' ) OR ($_POST['password1'] == '')){
			echo "Veuillez remplir tous les champs.";
			header('Location: http://localhost:8888/projetBapt/view/register.php');
		}
		else{
		
			if($_POST['password'] == $_POST['password1']){

				    $pseudo = htmlspecialchars($_POST['pseudo']);
					$password = sha1($_POST['password']);
					$firstName = htmlspecialchars($_POST['firstName']);
					$lastName = htmlspecialchars($_POST['lastName']);
					$birthDate = htmlspecialchars($_POST['birthDate']);
					$mail = htmlspecialchars($_POST['mail']);
					$phone = htmlspecialchars($_POST['phone']);  

					$tab=array(
						            'pseudo' => $pseudo,
						            'password' => $password,							
									'firstName' => $firstName,				           
						            'lastName' => $lastName,
						            'birthDate' => $birthDate,
						            'mail' => $mail,
						            'phone' => $phone,
						        );

					$var = ModelPerson::checkPseudo($tab);
					echo $var;

					/*if( $var == 0){

						ModelPerson::addPerson($tab);
            			echo "<script type='text/javascript'>document.location.replace('../view/accueil.php');</script>";

					
					}
					else{
						echo "Pseudo déja existant. Choisissez en un autre.";
            			echo "<script type='text/javascript'>document.location.replace('../view/register.php');</script>";

					}*/
					ModelPerson::addPerson($tab);

				}
				else{
					echo "Les mots de passes ne sont pas identiques.";
	            	echo "<script type='text/javascript'>document.location.replace('../view/register.php');</script>";

				}
			
		}

?>