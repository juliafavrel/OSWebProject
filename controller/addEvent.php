<?php

//require_once  '../model/Model.php';
require_once  '../model/ModelEvent.php';

    $nameEvt = $_POST['nameEvt'];
	$placeEvt = $_POST['placeEvt'];
	$dateEvt = $_POST['dateEvt'];
	$priceEvt = $_POST['priceEvt'];
	$descEvt = $_POST['descEvt'];
	$nbEvt = $_POST['nbEvt'];  

	$tab=array(
		            'nameEvt' => $nameEvt,
		            'placeEvt' => $placeEvt,
					'dateEvt' => $dateEvt,
		            'priceEvt' => $priceEvt,
		            'descEvt' => $descEvt,
		            'nbEvt' => $nbEvt,
		        );
	
	ModelEvent::addEvent($tab);



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