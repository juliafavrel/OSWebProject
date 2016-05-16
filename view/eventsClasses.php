<?php include("head.php"); ?>
<?php include("entete.php"); ?>


<div class="container">
      <div class="section">
          <h3> Participants par évènement </h3>
      </div>
</div>

    <?php 
    require_once  '../model/ModelEvent.php';
    require_once  '../model/ModelRegistr.php';

    $events = ModelEvent::getAllEvents();
      foreach($events as $event) {  

      print '<div class="container">
              <div class="section">
              <div class="card center">  

                <table>
                  <thead>';
                    print "<tr > <th>" .  $event["nameEvt"] . "</th>";
                    print "<th>" .  $event["placeEvt"] . "</th>";
                    print "<th>" .  $event["dateEvt"] . "</th>";
                    print "<th>" .  $event["descEvt"] . "</th>";
                    print "<th> Places restantes : " .  $event["nbEvt"] . "</th>";
                    print "<th></th> </tr>";
                    
                  
                  print '</thead>
                  <tbody>';

                  $tab=array(
                      'idEvent' => $event["idEvt"],
                  );

                  $persons = ModelRegistr::getParticipants($tab);
                  
                  foreach($persons as $person) {
                    print '<tr>
                            <td>' .  $person["lastName"] . '</td>
                            <td>' .  $person["firstName"] . '</td>
                            <td>' .  $person["birthDate"] . '</td>
                            <td>' .  $person["mail"] . '</td>
                            <td>' .  $person["phone"] . '</td>';
                    //Bouton supprimer
                   print '<form method="post" action="../controller/suppInscription.php" accept-charset="utf-8">
                           <input type="hidden" name="idClient" value="'.$person["idPerson"].'"> 
                           <input type="hidden" name="idEvent" value="' .$event["idEvt"].'" >';
                   print "<td>" .  ' <button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action"><i class="material-icons">delete</i></button>'. "</td> </tr>";
                   print '</form>';

                  }
              
          print '</tbody>
          </table>
          </div>
        </div>
      </div>';

      }

 
   ?> 


 <?php include("image-deroulante.php"); ?>

 <?php include("footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>
