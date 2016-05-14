<?php

require_once  '../model/ModelEvent.php';

				$idEvt = $_POST['idEvt'];

				$supp=array(
					            'idEvt' => $idEvt,
					        );

					ModelEvent::suppEvt($supp);

?>