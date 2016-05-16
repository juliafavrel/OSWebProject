
<?php


class ModelEvent{

    //Connexion à la base de données
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

    //Ajoute un évènement dans la base de données
    public static function addEvent($tab){
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
    }

    //Retourne la liste de tous les évènements
    public static function getAllEvents() {
        $conn = self::connexion();

        $sql = "SELECT * FROM evt
                ORDER BY dateEvt";

        $users=$conn->query($sql);
        $result = $users->fetchAll();
        return $result;
    }

    //Retourne la liste des évènements ayant dans le nom ou lieu la chaine de caractère recherchée et passée en paramètre.
    public static function searchEvt($search) {
        $conn = self::connexion();

        $req = $conn->prepare('SELECT * FROM evt 
                             WHERE nameEvt LIKE "%":search"%" 
                             OR placeEvt LIKE "%":search"%"'); 

        $req->execute($search);
        $data = $req->fetchAll();
        $req->closeCursor();
        return $data;

    }

    //Modifie un évènement
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
        $sql->closeCursor();
    }

    //Supprime un évènement de la base de données
    public static function suppEvt($supp){
        $conn = self::connexion();

        $sql = $conn->prepare('DELETE FROM evt 
                               WHERE idEvt = :idEvt');

        $res=$sql->execute($supp);
        $sql->closeCursor();
    }

}


?>
