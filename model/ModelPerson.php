
<?php 

class ModelPerson {

    //Connection a la base de données
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

    //Ajoute un membre dans la base de données
    public static function addPerson($tab){
        $conn = self::connexion();

        $sql = $conn->prepare("INSERT INTO person(idPerson, password, firstName, lastName, birthDate, mail, phone)
        VALUES (:idPerson, :password, :firstName, :lastName, :birthDate, :mail, :phone)");

        $sql->bindParam(':idPerson', $tab['idPerson']);
        $sql->bindParam(':password', $tab['password']);
        $sql->bindParam(':firstName', $tab['firstName']);
        $sql->bindParam(':lastName', $tab['lastName']);
        $sql->bindParam(':birthDate', $tab['birthDate']);
        $sql->bindParam(':mail', $tab['mail']);
        $sql->bindParam(':phone', $tab['phone']);

        $res = $sql->execute();
        $sql->closeCursor();
       
    }

    //Retourne tous les adhérents
    public static function getAllPerson() {
        $conn = self::connexion();

        $sql = "SELECT * FROM person
                ORDER BY lastName";

        $users=$conn->query($sql);
        $result = $users->fetchAll();
        return $result;
        $sql->closeCursor();
    }

    //Modifie les données d'un adhérent
    public static function editPerson($tab) {
        $conn = self::connexion();

        $sql = $conn->prepare("UPDATE person 
                               SET firstName = :firstName, lastName = :lastName, mail = :mail, phone = :phone 
                               WHERE idPerson = :idPerson");
            
        $sql->bindParam(':idPerson', $tab['idPerson']);
        $sql->bindParam(':firstName', $tab['firstName']);
        $sql->bindParam(':lastName', $tab['lastName']);
        $sql->bindParam(':mail', $tab['mail']);
        $sql->bindParam(':phone', $tab['phone']); 

        $res = $sql->execute();
        $sql->closeCursor();
    }

    //Supprime une personne de la base de données
    public static function suppPerson($supp){

        $conn = self::connexion();

        $sql = $conn->prepare('DELETE FROM person 
                WHERE idPerson = :idPerson');

        $res=$sql->execute($supp);
        $sql->closeCursor();
    }

    //Recherche une personne à partir d'un mot ou d'une partie de mot donnée
    public static function searchPerson($search) {

        $conn = self::connexion();

        $req = $conn->prepare('SELECT * FROM person 
                             WHERE firstName LIKE "%":search"%" 
                             OR lastName LIKE "%":search"%"'); 

        $req->execute($search); 
        $data = $req->fetchAll(); 
        $req->closeCursor();
        return $data;
    }

    //Vérifie si le pseudo existe déja dans la base de données
    public static function checkPseudo($tab){
        $conn = self::connexion();

        $req = $conn->prepare('SELECT * 
                            FROM person 
                            WHERE idPerson = :idPerson');


        $req->bindParam(':idPerson', $tab['idPerson']);

        $req->execute();
        $count = $req->rowCount();
        $req->closeCursor();

        //Si il n'y a pas de retour de la requete, le pseudo n'est pas utilisé c'est donc valide
        if($count==0) {
            $bool = true;
        }
        else{
            $bool =false;
        }
        return $bool;
    } 

    //Retourne toutes les informations de client qui souhaite se connecter
    public static function connexionPerson($tab){
        $conn = self::connexion();

        $req = $conn->prepare(' SELECT * FROM person 
                                WHERE idPerson = :idPerson');

        $req->execute($tab);
        $data = $req->fetch(); 
        $req->closeCursor();
        return $data;   
    }

    //Vérifie si le membre est un administrateur. Renvoie un booléen
    public static function isAdmin($cookie){
        $conn = self::connexion();

        $tab=array(
            'id' => $cookie,
            );

        $req = $conn->prepare('SELECT idAdmin FROM admin 
                                WHERE idAdmin = :id');
        $req->execute($tab);
        $count = $req->rowCount();
        $req->closeCursor();

        if($count==1) {//Si est un administrateur
            $bool = true;
        }
        else{
            $bool =false;
        }

        return $bool; //Retourne le booléen
    }
}
?>
