<?php


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

            $data=ModelPerson::connexionPerson($tab); //Appelle la fonction du model qui renvoie le mot de passe associé au pseudo dans la base de données


            if ($data['password'] == $password) //Si le mot de passe est le bon
            {

                setcookie("idPerson",$data[0],time()+ 3600*24*15,"/projetBapt/");
                setcookie("pseudo",$data[1],time()+ 3600*24*15,"/projetBapt/");
                setcookie("password",$data[2],time()+ 3600*24*15,"/projetBapt/");

                //echo $_COOKIE["idPerson"];
                //echo $_COOKIE["pseudo"];
                //echo $_COOKIE["password"];
	           	echo "<script type='text/javascript'>document.location.replace('../view/accueil.php');</script>";
            


                
            }

            else //Mot de passe incorrect

            {

            echo "<p>Mot de passe incorrect,</p>";
            echo "<p>Cliquez <a href=\"../view/connexion.php\">ici</a> pour recommencer.</p>";


            }


        }
?>