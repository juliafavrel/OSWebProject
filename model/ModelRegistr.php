<?php

class ModelRegistr {

    //Se connecte a la base données
    public static function connexion(){
        $servername = "localhost";
        $username = "julia";
        $pass = "julia";
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

    //Retourne toutes les inscriptions validées
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

    //Retourne les inscriptions  du client passé en paramètre
    public static function getMyRegistr($tab){
        $conn = self::connexion();

        $req = $conn->prepare(' SELECT nameEvt, placeEvt, dateEvt, priceEvt, descEvt
                                FROM evt, registr 
                                WHERE idClient = :idPerson
                                AND idEvent = idEvt'); 

        $req->execute($tab); 
        $data = $req->fetchAll();
        return $data;
        $req->closeCursor();
    }

    //Supprime une inscription d'un client passé en paramètre
    public static function suppInscription($supp){
        $conn = self::connexion();

        $sql = $conn->prepare('DELETE FROM registr 
                WHERE idClient = :idClient
                AND idEvent = :idEvent;');

        $res=$sql->execute($supp);
        $sql->closeCursor();

    }

    //Vérifie si l'inscription du client pour un évènement donné existe déja 
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

    //Retourne tous les participants d'un évènement donné
    public static function getParticipants($tab){
        $conn = self::connexion();

        $req = $conn->prepare( "SELECT idPerson, firstName, lastName, birthDate, mail, phone 
                    FROM person , registr 
                    WHERE idEvent= :idEvent
                    AND idClient=idPerson");

        $req->execute($tab); 
        $data = $req->fetchAll(); 
        $req->closeCursor();
        return $data;
    }

}

?>