<?php

class ModelRegistr {
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
            		AND idEvent=idEvt
                    ORDER BY dateEvt";
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

      /*public static function searchInscription($search) {

            $conn = self::connexion();
            //Prepare the selection

            $req = $conn->prepare(' SELECT DISTINCT R.idClient, R.idEvent, P.firstName, P.lastName, E.nameEvt, E.placeEvt, E.dateEvt 
                                    FROM person P, evt E, registr R 
                                    WHERE idClient = idPerson
                                    AND idEvent = idEvt
                                    AND firstName LIKE "%":search"%" 
                                    OR lastName LIKE "%":search"%"
                                    OR nameEvt="%":search"%"'); 

            $req->execute($search); //Execution of the request
            $data = $req->fetchAll(); //List all the result in array
            return $data; //Return the array
      }*/


      public static function suppInscription($supp){

            $conn = self::connexion();

            $sql = $conn->prepare('DELETE FROM registr 
                    WHERE idClient = :idClient
                    AND idEvent = :idEvent;');

            $res=$sql->execute($supp);
            $sql->closeCursor();
            echo "<script type='text/javascript'>document.location.replace('../view/inscription.php');</script>";

    }

        public static function checkReg($tab){
        $conn = self::connexion();

        $req = $conn->prepare('SELECT * 
                            FROM registr 
                            WHERE idClient = :idClient
                            AND idEvent = :idEvent');

        $req->bindParam(':idClient', $tab['idClient']);
        $req->bindParam(':idEvent', $tab['idEvent']);

        $req->execute();
        $count = $req->rowCount();
        

        //Si il n'y a pas de retour de la requete, le membre n'est pas encore inscrit
        if($count==0) {
            $bool = true;
        }
        else{
            $bool =false;
        }
        return $bool;
        $req->closeCursor();
    } 

    public static function getParticipants($tab){
        $conn = self::connexion();


        $req = $conn->prepare( "SELECT firstName, lastName, birthDate, mail, phone 
                    FROM person , registr 
                    WHERE idEvent= :idEvent
                    AND idClient=idPerson");

        $req->execute($tab); //Execution of the request
        $data = $req->fetchAll(); //List all the result in array
        return $data; //Return the array
     
        $sql->closeCursor();

    }









}

?>