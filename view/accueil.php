

<?php include("head.php"); ?>


<body>
<?php include("entete.php"); ?>





  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center pink-text text-darken-3">L'orge sucrée </h1>
        <div class="row center">
          <h5 class="header col s12 ">Site de réservation d'activité et d'évènements liés au club.</h5>
        </div>
        <div class="row center">
          <a href="http://www.orgesucree.fr/Orge_Sucree/Bienvenue.html" id="download-button" class="btn-large waves-effect waves-light pink darken-3">Site du centre équestre</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="../assets/images/photo3.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">



    <?php 
         
            require_once  '../model/ModelEvent.php';

            $events = ModelEvent::getAllEvents();

            foreach($events as $event) {

              $id=$event["idEvt"];
              $cookie = $_COOKIE['idPerson'];

               print '<div class="icon-block">
                  <div class="card center">                  
                       <div class="card-content">';

                       print "<span class=\"card-title  grey-text text-darken-4\">" .$event["nameEvt"] . "</span>";

                         print "<p><strong>" . "Lieu : " . "</strong>" . $event["placeEvt"] . "</p>";
                         print "<p><strong>" . "Date : " . "</strong>" . $event["dateEvt"] . "</p>";
                         print "<p><strong>" . "Prix : " . "</strong>" . $event["priceEvt"] . "€" . "</p>";
                         print "<p><strong>" . "Description : " . "</strong>" . $event["descEvt"] . "</p>";
                         print "<p><strong>" . "Places restantes : " . "</strong>" . $event["nbEvt"] . "</p>";

                          print '<form method="post" action="../controller/inscriptionClient.php">
                                <input type="hidden" name="idEvent" value="'.$id.'" />';
                           
                          if (isset($cookie)){
                           
                               print ' <input type="hidden" name="idClient" value="'.$cookie.'" />';

                            print '<button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">
                                S\'inscrire
                                </button>';
                          }

                          print '</form>';
                      
                        
                        
                    print "</div>";
                  print "</div>";
                print "</div>";
          }
 
   ?> 

   
    </div>
  </div>




 <?php include("contact.php"); ?>

 <?php include("image-deroulante.php"); ?>

 <?php include("footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>
