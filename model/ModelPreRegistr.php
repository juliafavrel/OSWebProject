<?php

class ModelPreRegistr {
    //Se connecte a la base de donnée
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

    //Vérifie si le participant est déja inscrit
    public static function checkInscription($tab){
        $conn = self::connexion();

        $req = $conn->prepare('SELECT * 
                            FROM preRegistr 
                            WHERE idClient = :idClient
                            AND idEvent = :idEvent');

        $req->bindParam(':idClient', $tab['idClient']);
        $req->bindParam(':idEvent', $tab['idEvent']);

        $req->execute();
        $count = $req->rowCount();
        $req->closeCursor();

        //Si il n'y a pas de retour de la requete, le membre n'est pas encore inscrit
        if($count==0) {
            $bool = true;
        }
        else{
            $bool =false;
        }
        return $bool;
    } 

    //Créer un préInscription avec que le client ait cliqué sur le bouton S'inscrire
	public static function preInscription($tab){

		$conn = self::connexion();

		    $sql = $conn->prepare("INSERT INTO preRegistr(idClient, idEvent, dateRegistration)
            VALUES (:idClient, :idEvent, CURDATE())");

            $sql->bindParam(':idClient', $tab['idClient']);
            $sql->bindParam(':idEvent', $tab['idEvent']);

            $res = $sql->execute();
            $sql->closeCursor();

   
            echo "<script type='text/javascript'>document.location.replace('../view/mesinscription.php');</script>";

	}

    //Retourne toutes les preregistr
	public static function getAllPreRegistr(){

			$conn = self::connexion();
		    
            $sql = "SELECT idClient, idEvent, firstName, lastName, nameEvt, placeEvt, dateEvt, dateRegistration 
            		FROM person , evt , preRegistr 
            		WHERE idClient=idPerson
            		AND idEvent=idEvt
                    ORDER BY dateRegistration";

            $prereg=$conn->query($sql);
            $result = $prereg->fetchAll();
            return $result;
            
           

            $res = $sql->execute();
            $sql->closeCursor();

	}

    //Valide une préInscription, ce qui l'ajoute à la table registr et supprime la preRegistr grace au trigger
    public static function validerPreReg($tab){

        $conn = self::connexion();

        $sql = $conn->prepare("INSERT INTO registr(idClient, idEvent)
        VALUES (:idClient, :idEvent)");
        
        //$sql->bindParam(':idClient', $tab['idClient']);
        //$sql->bindParam(':idEvent', $tab['idEvent']);
        
        $res=$sql->execute($tab);
        $sql->closeCursor();

        echo "<script type='text/javascript'>document.location.replace('../view/inscription.php');</script>";

    }

    public static function getMyPreRegistr($tab){

    $conn = self::connexion();

    $req = $conn->prepare(' SELECT nameEvt, placeEvt, dateEvt, priceEvt, descEvt
                            FROM evt, preRegistr 
                            WHERE idClient = :idPerson
                            AND idEvent = idEvt'); 

    $req->execute($tab); //Execution of the request
    $data = $req->fetchAll(); //List all the result in array
    return $data; //Return the array
 
    $req->closeCursor();

    }

      public static function suppPreInscr($supp){

            $conn = self::connexion();

            $sql = $conn->prepare('DELETE FROM preRegistr 
                    WHERE idClient = :idClient
                    AND idEvent = :idEvent;');

            $res=$sql->execute($supp);
            $sql->closeCursor();
            echo "<script type='text/javascript'>document.location.replace('../view/preinscr.php');</script>";

    }

    public static function searchPreInscription($search) {

            $conn = self::connexion();
            //Prepare the selection

            $req = $conn->prepare(' SELECT DISTINCT idClient, idEvent, firstName, lastName, nameEvt, placeEvt, dateEvt 
                                    FROM person , evt , registr 
                                    WHERE idClient=idPerson
                                    AND idEvent=idEvt
                                    AND firstName LIKE "%":search"%" 
                                    OR lastName LIKE "%":search"%"
                                    OR nameEvt LIKE "%":search"%"
                                    OR placeEvt LIKE "%":search"%"'); 

            $req->execute($search); //Execution of the request
            $data = $req->fetchAll(); //List all the result in array
            return $data; //Return the array
      }






}

?>