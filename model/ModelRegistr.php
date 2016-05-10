<?php

class ModelPreRegistr {
    //Se connecte a la base données
    public static function connexion(){
        $servername = "localhost";
        $username = "juju";
        $pass = "salut";
        $dbname = "club";

            try{
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;

            }
            catch (PDOException $e) {
                echo 'Échec lors de la connexion : ' . $e->getMessage();
            }

    }

    //retourne toutes les inscriptions validées
	public static function getAllRegistr(){

			$conn = self::connexion();
		    
            $sql = "SELECT idClient, idEvent, firstName, lastName, nameEvt, placeEvt, dateEvt 
            		FROM person , evt , registr 
            		WHERE idClient=idPerson
            		AND idEvent=idEvt";
            $prereg=$conn->query($sql);
            $result = $prereg->fetchAll();
            return $result;
            
           

            $res = $sql->execute();
            $sql->closeCursor();

	}


    public static function getMyRegistr($tab){

        $conn = self::connexion();

        $req = $conn->prepare(' SELECT nameEvt, placeEvt, dateEvt, priceEvt, descEvt
                                FROM evt, registr 
                                WHERE idClient = :idPerson
                                AND idEvent = idEvt'); 

        $req->execute($tab); //Execution of the request
        $data = $req->fetchAll(); //List all the result in array
        return $data; //Return the array
     
        $sql->closeCursor();

    }








}

?>