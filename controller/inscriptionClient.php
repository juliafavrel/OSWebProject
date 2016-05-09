 <?php 
    require_once  '../model/ModelPreRegistr.php';

    $tab=array(
                  'idEvent' => $_GET['idEvent'],
                  'idClient' => $_COOKIE['idPerson'],
              );

    $datas = ModelPreRegistr::preInscription($tab);

?>