
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

        echo "<script type='text/javascript'>document.location.replace('../view/evenements.php');</script>";

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

      public static function searchEvt($search) {

            $servername = "localhost";
            $username = "juju";
            $pass = "salut";
            $dbname = "club";
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
            //Prepare the selection

            $req = $conn->prepare('SELECT * FROM event 
                                 WHERE nameEvt LIKE "%":search"%" 
                                 OR descEvt LIKE "%":search"%"'); 

            $req->execute($search); //Execution of the request
            $data = $req->fetchAll(); //List all the result in array
            return $data; //Return the array
        }



}


?>
