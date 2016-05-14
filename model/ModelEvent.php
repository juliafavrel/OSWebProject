
<?php


class ModelEvent{

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

    public static function addEvent($tab){
        //Connexion a la bd
        $conn = self::connexion();

        $sql = $conn->prepare("INSERT INTO evt(nameEvt, placeEvt, dateEvt, priceEvt, descEvt, nbEvt)
        VALUES (:nameEvt, :placeEvt, :dateEvt, :priceEvt, :descEvt, :nbEvt)");
        
        $sql->bindParam(':nameEvt', $tab['nameEvt']);
        $sql->bindParam(':placeEvt', $tab['placeEvt']);
        $sql->bindParam(':dateEvt', $tab['dateEvt']);
        $sql->bindParam(':priceEvt', $tab['priceEvt']);
        $sql->bindParam(':descEvt', $tab['descEvt']);
        $sql->bindParam(':nbEvt', $tab['nbEvt']);
        
        $res=$sql->execute();

        echo "<script type='text/javascript'>document.location.replace('../view/evenements.php');</script>";

    }


    public static function getAllEvents() {

            $conn = self::connexion();

            $sql = "SELECT * FROM evt
                    ORDER BY dateEvt";
            $users=$conn->query($sql);
            $result = $users->fetchAll();
            return $result;
    }

      public static function searchEvt($search) {

            $conn = self::connexion();
            //Prepare the selection

            $req = $conn->prepare('SELECT * FROM evt 
                                 WHERE nameEvt LIKE "%":search"%" 
                                 OR placeEvt LIKE "%":search"%"'); 

            $req->execute($search); //Execution of the request
            $data = $req->fetchAll(); //List all the result in array
            return $data; //Return the array
          
        }


    public static function editEvt($tab){

        $conn = self::connexion();

        $sql = $conn->prepare(" UPDATE evt 
                                SET nameEvt = :nameEvt, placeEvt = :placeEvt, dateEvt = :dateEvt, priceEvt = :priceEvt, descEvt = :descEvt, nbEvt = :nbEvt 
                                WHERE idEvt = :idEvt");
                
                $sql->bindParam(':idEvt', $tab['idEvt']);
                $sql->bindParam(':nameEvt', $tab['nameEvt']);
                $sql->bindParam(':placeEvt', $tab['placeEvt']);
                $sql->bindParam(':dateEvt', $tab['dateEvt']);
                $sql->bindParam(':priceEvt', $tab['priceEvt']);
                $sql->bindParam(':descEvt', $tab['descEvt']);
                $sql->bindParam(':nbEvt', $tab['nbEvt']);

                $res=$sql->execute();
                echo "<script type='text/javascript'>document.location.replace('../view/evenements.php');</script>";

    }

    public static function suppEvt($supp){

        $conn = self::connexion();

        $sql = $conn->prepare('DELETE FROM evt 
                               WHERE idEvt = :idEvt');
        //$sql->bindParam(':idPerson', $tab['idPerson']);

        $res=$sql->execute($supp);
        echo "<script type='text/javascript'>document.location.replace('../view/evenements.php');</script>";

    }









}


?>
