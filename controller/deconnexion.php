<?php
	
    setcookie('idPerson', '', -1 , "/projetBapt/",null);
    setcookie('pseudo', '', -1 , "/projetBapt/",null);
    setcookie('password', '', -1 , "/projetBapt/",null);

    header('Location: http://localhost:8888/projetBapt/view/accueil.php');

?>