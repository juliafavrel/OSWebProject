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


	public static function preInscription($tab){

		$conn = self::connexion();

			$date=date("d-m-Y");

		    $sql = $conn->prepare("INSERT INTO preRegistr(idClient, idEvent, dateRegistration)
            VALUES (:idClient, :idEvent, $date)");

            $sql->bindParam(':idClient', $tab['idClient']);
            $sql->bindParam(':idEvent', $tab['idEvent']);
          
            $res = $sql->execute();
            $sql->closeCursor();

   
            echo "<script type='text/javascript'>document.location.replace('../view/accueil.php');</script>";

	}


	public static function getAllPreRegistr(){

			$conn = self::connexion();
		    
            $sql = "SELECT idClient, idEvent, firstName, lastName, nameEvt, placeEvt, dateEvt, dateRegistration 
            		FROM person , evt , preRegistr 
            		WHERE idClient=idPerson
            		AND idEvent=idEvt";
            $prereg=$conn->query($sql);
            $result = $prereg->fetchAll();
            return $result;
            
           

            $res = $sql->execute();
            $sql->closeCursor();

	}

    public static function validerPreReg($tab){

        $conn = self::connexion();

        $sql = $conn->prepare("INSERT INTO registr(idClient, idEvent)
        VALUES (:idClient, :idEvent)");
        
        $sql->bindParam(':idClient', $tab['idClient']);
        $sql->bindParam(':idEvent', $tab['idEvent']);
        
        $res=$sql->execute();

        echo "<script type='text/javascript'>document.location.replace('../view/inscription.php');</script>";



    }





}

?>