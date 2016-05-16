<?php ob_start(); 

	require '../model/ModelPerson.php';
    
        //Vérifie si les champs ne sont pas vide et les place dans les variables en les cryptant
        if(isset($_POST["idPerson"]))
        {
           $pseudo = sha1($_POST['idPerson']);
        }
        if(isset($_POST["password"]))
        {
           $password = sha1($_POST['password']);
        }

        //Vérifie si les champs sont bien remplis
        if (($_POST['idPerson'] == '') OR ($_POST['password'] == '') ) 
        {
            $message = '<p>Veuillez remplir tous les champs.</p>
            <p>Cliquez <a href="../view/connexion.php">ici</a> pour recommencer.</p>';
            echo $message;
        }
        else 
        {
            $tab=array(
                'idPerson' => $pseudo,
                );

            $data=ModelPerson::connexionPerson($tab); //Appelle la fonction du model qui renvoie toutes les données de la personne associée au pseudo
            
            if ($data[1] == $password) //Si le mot de passe est le bon
            {
                $expire = 3600*24*15;
                setcookie("idPerson",$data[0],time()+ $expire,"/projetBapt/",null);
                header('Location: ../view/accueil.php');

            }
            else //Mot de passe incorrect
            {
                echo "<p>Mot de passe incorrect,</p>";
                echo "<p>Cliquez <a href=\"../view/connexion.php\">ici</a> pour recommencer.</p>";
            }
        }
ob_end_flush(); ?>