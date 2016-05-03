<?php
/*! \brief Classe général pour les models
 *         
 * Cette classe permet de définir des fonctions communes à toutes les classes qui héritent de celle-ci
 *  
 */


// On va chercher le fichier de configuration dans "./config/config.php"
require_once '../config/config.php';

class Model {


    /// Cette fonction permet d'établir la connexion à la base de données en créant un objet pdo (self::$pdo) qui permettra de communiquer avec la base de données.
    public static function connexion() {


        $servername = "localhost";
        $username = "juju";
        $pass = "salut";
        $dbname = "club";

        try {
            // Connexion à la base de données            
            // Le dernier argument sert à ce que toutes les chaines de charactères 
            // en entrée et sortie de MySql soit dans le codage UTF-8
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            // On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $ex) {
            if (Conf::getDebug()) {
                echo $ex->getMessage();
                die('Problème lors de la connexion à la base de donnée');
            } else {
                echo 'Une erreur est survenue. <a href=""> Retour a la page d\'accueil </a>';
            }
            die();
        }
    }

   

}

// On initiliase la connexion $pdo un fois pour toute
self::connexion();
