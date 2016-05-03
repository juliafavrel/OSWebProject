
<?php


class ModelEvent{

    public static function addEvent($tab){
        //Connexion a la bd
        $servername = "localhost";
        $username = "juju";
        $pass = "salut";
        $dbname = "club";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);

        $sql = $conn->prepare("INSERT INTO evt(nameEvt, placeEvt, dateEvt, priceEvt, descEvt, nbEvt)
        VALUES (:nameEvt, :placeEvt, :dateEvt, :priceEvt, :descEvt, :nbEvt)");
        
        $sql->bindParam(':nameEvt', $tab['nameEvt']);
        $sql->bindParam(':placeEvt', $tab['placeEvt']);
        $sql->bindParam(':dateEvt', $tab['dateEvt']);
        $sql->bindParam(':priceEvt', $tab['priceEvt']);
        $sql->bindParam(':descEvt', $tab['descEvt']);
        $sql->bindParam(':nbEvt', $tab['nbEvt']);
        
        $res=$sql->execute();

        header('Location: ../view/evenements.php');
        
        print_r($sql->errorInfo()); // Au cas ou tu veux savoir ou ya une erreur
    }


    public static function getAllEvents() {

            $servername = "localhost";
            $username = "juju";
            $pass = "salut";
            $dbname = "club";
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);

            $sql = "SELECT * FROM evt";
            $users=$conn->query($sql);
            $result = $users->fetchAll();
            return $result;
    }



}


?>
