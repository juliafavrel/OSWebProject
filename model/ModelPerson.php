
<?php

class ModelPerson {

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


    public static function addPerson($tab){
        //Connexion a la base de données


            $conn = self::connexion();

        //if (!empty($_POST[$tab['pseudo']]))
       //{
            $sql = $conn->prepare("INSERT INTO person(pseudo, password, firstName, lastName, birthDate, mail, phone)
            VALUES (:pseudo, :password, :firstName, :lastName, :birthDate, :mail, :phone)");

            $sql->bindParam(':pseudo', $tab['pseudo']);
            $sql->bindParam(':password', $tab['password']);
            $sql->bindParam(':firstName', $tab['firstName']);
            $sql->bindParam(':lastName', $tab['lastName']);
            $sql->bindParam(':birthDate', $tab['birthDate']);
            $sql->bindParam(':mail', $tab['mail']);
            $sql->bindParam(':phone', $tab['phone']);
            
           

            $res = $sql->execute();
            $sql->closeCursor();

           // $sql->closeCursor();
            //$conn=null;
   
            echo "<script type='text/javascript'>document.location.replace('../view/accueil.php');</script>";

            //if ($res==true){
              //  header('Location: ../view/accueil.php');
            //}
             // Au cas ou tu veux savoir ou ya une erreur
            //print_r($sql->errorInfo());
        /*}
        else{
            header('Location: ../view/register.php');
        }*/
    }


    public static function getAllPerson() {

            $conn = self::connexion();

            $sql = "SELECT * FROM person";
            $users=$conn->query($sql);
            $result = $users->fetchAll();
            return $result;
    }


    public static function editPerson($tab) {
        //Connexion a la base de données
            $conn = self::connexion();

            $sql = $conn->prepare("UPDATE person 
                                   SET firstName = :firstName, lastName = :lastName, mail = :mail, phone = :phone 
                                   WHERE idPerson = :idPerson");
                
                $sql->bindParam(':idPerson', $tab['idPerson']);
                $sql->bindParam(':firstName', $tab['firstName']);
                $sql->bindParam(':lastName', $tab['lastName']);
                $sql->bindParam(':mail', $tab['mail']);
                $sql->bindParam(':phone', $tab['phone']); 

                $res=$sql->execute();
                echo "<script type='text/javascript'>document.location.replace('../view/client.php');</script>";

        /*try{
            $etud=$conn->query("UPDATE person SET firstName='".$_POST['firstName']."', lastName=".$_POST['lastName'].", birthDate='".$_POST['birthDate']."', mail='".$_POST['mail']."', phone='".$_POST['phone']."' WHERE idPerson='".$_POST['idPerson']."';");
            $test=$conn->query("SELECT * FROM person WHERE idPerson='".$_POST['idPerson']."' AND firstName='".$_POST['firstName']."' AND lastName='".$_POST['lastName']."';");
            $count = $test->rowCount();
            
            if ($count=='1'){
                $res=$conn->query("SELECT * FROM person WHERE idPerson='".$_POST['idPerson']."';");  
                echo $res['firstName'];
                echo $res['lastName'];
                echo "a bien été modifié(e).";
                
                }
            }
            else {
                echo 'Le numero de client que vous avez tapez n\'existe pas';
            }*/
                
                //$conn->closeCursor();        

    }


    public static function suppPerson($supp){

            $conn = self::connexion();

            $sql = $conn->prepare('DELETE FROM person 
                    WHERE idPerson = :idPerson');
            //$sql->bindParam(':idPerson', $tab['idPerson']);

            $res=$sql->execute($supp);
            print_r($sql->errorInfo());
    }

  public static function searchPerson($search) {

            $conn = self::connexion();
            //Prepare the selection

            $req = $conn->prepare('SELECT * FROM person 
                                 WHERE firstName LIKE "%":search"%" 
                                 OR lastName LIKE "%":search"%"'); 

            $req->execute($search); //Execution of the request
            $data = $req->fetchAll(); //List all the result in array
            return $data; //Return the array
        }

  public static function checkPseudo($pseudo){
        $conn = self::connexion();

        $req = $conn->prepare('SELECT COUNT(*) FROM person 
                                 WHERE pseudo = :pseudo');

        $req->execute($pseudo);
        return $req;

        $req->closeCursor();

  }

}
?>
