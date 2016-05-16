<?php
	
	//Supprime le cookie en mettant une date d'expiration négative
    setcookie('idPerson', '', -1 , "/projetBapt/",null);

    header('Location: ../view/accueil.php');

?>