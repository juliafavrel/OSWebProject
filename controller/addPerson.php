<?php
require  '../model/ModelPerson.php';

		//Vérification des champs obligatoires
		if( ($_POST['pseudo'] == '') OR ($_POST['firstName'] == '')  OR ($_POST['lastName'] == '') OR ($_POST['password'] == '' ) OR ($_POST['password1'] == '')){
			echo '<p class"center">Veuillez remplir tous les champs.
				<br>
				Cliquez <a href="../view/register.php">ici</a> pour recommencer.</p>';
		}
		else{
			//Vérifictaion : les mots de passes sont-ils identiques ?
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

					//Vérification : le pseudo est-il déja utilisé ?
					$ok = ModelPerson::checkPseudo($_POST['pseudo']);
					
					if($ok){
						ModelPerson::addPerson($tab);
            			echo '<p class"center">Inscription validée.
						<br>
            			Cliquez <a href="../view/connexion.php">ici</a> pour vous connecter.</p>';
					}
					else{
						echo '<p class"center">Pseudo déja existant, choisissez en un autre.
						<br>
            			Cliquez <a href="../view/register.php">ici</a> pour recommencer.</p>';

					}

				}
				else{
					echo '<p class"center">Les mots de passes doivent être identiques.
						<br>
            			Cliquez <a href="../view/register.php">ici</a> pour recommencer.</p>';

				}
			
		}
?>