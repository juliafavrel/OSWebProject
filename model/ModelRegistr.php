<?php

class ModelPreRegistr {

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

	public static function getAllRegistr(){

			$conn = self::connexion();
		    
            $sql = "SELECT idClient, idEvent, firstName, lastName, nameEvt, placeEvt, dateEvt 
            		FROM person , evt , Registr 
            		WHERE idClient=idPerson
            		AND idEvent=idEvt";
            $prereg=$conn->query($sql);
            $result = $prereg->fetchAll();
            return $result;
            
           

            $res = $sql->execute();
            $sql->closeCursor();

	}







}

?>