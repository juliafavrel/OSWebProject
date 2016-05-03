<?php

require_once  '../model/ModelPerson.php';


	/*switch($_POST['action']){

		case 'addPerson':*/
		
		    $pseudo = $_POST['pseudo'];
			$password = $_POST['password'];
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$birthDate = $_POST['birthDate'];
			$mail = $_POST['mail'];
			$phone = $_POST['phone'];  

			$tab=array(
				            'pseudo' => $pseudo,
				            'password' => $password,							
							'firstName' => $firstName,				           
				            'lastName' => $lastName,
				            'birthDate' => $birthDate,
				            'mail' => $mail,
				            'phone' => $phone,
				        );

			ModelPerson::addPerson($tab);
			
			/*break;


	};*/

/*
	if(!empty($_POST['pseudo'])){

			$passe = mysql_real_escape_string(htmlspecialchars($_POST['passeword']));
			$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['passeword2']));

			if($passe == $passe2){
*/





/*
			---------AFFICHE FIRSTNAME--------
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "club";

try {
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


	$resultats=$conn->query("SELECT * FROM person ");
	$resultats->setFetchMode(PDO::FETCH_OBJ);
	foreach( $resultats as $row)
	{
        echo 'Utilisateur : '.$row->firstName.'<br>';
	}
	$resultats->closeCursor();


    }
		catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;


*/



?>