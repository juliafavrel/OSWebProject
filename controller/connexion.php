<?php ob_start();
		require '../model/ModelPerson.php';
        
        if(isset($_POST["pseudo"]))
        {
           $pseudo = htmlspecialchars($_POST['pseudo']);
        }
        if(isset($_POST["password"]))
        {
           $password = sha1($_POST['password']);
        }

        //Vérifie si les champs sont bien remplis
        if (($_POST['pseudo'] == '') OR ($_POST['password'] == '') ) 
        {
            $message = '<p>Veuillez remplir tous les champs.</p>
            <p>Cliquez <a href="../view/connexion.php">ici</a> pour recommencer.</p>';
            echo $message;
        }
        else 
        {
            $tab=array(
                'pseudo' => $pseudo,
                );

            $data=ModelPerson::connexionPerson($tab); //Appelle la fonction du model qui renvoie toutes les données de la personne associée au pseudo
            
            if ($data[2] == $password) //Si le mot de passe est le bon
            {

                $expire = 3600*24*15;
                setcookie("idPerson",$data[0],time()+ $expire,"/projetBapt/",null);
                setcookie("pseudo",$data[1],time()+ $expire,"/projetBapt/",null);
                setcookie("password",$data[2],time()+ $expire,"/projetBapt/",null);

                //echo $_COOKIE["idPerson"];
                //echo $_COOKIE["pseudo"];
                //echo $_COOKIE["password"];
                //echo "<script type='text/javascript'>document.location.replace('../view/accueil.php');</script>";
                //include '../view/accueil.php';
                header('Location: http://localhost:8888/projetBapt/view/accueil.php');

                echo 'coucou';
            }
            else //Mot de passe incorrect
            {
                echo "<p>Mot de passe incorrect,</p>";
                echo "<p>Cliquez <a href=\"../view/connexion.php\">ici</a> pour recommencer.</p>";
            }
        }
ob_end_flush();?>