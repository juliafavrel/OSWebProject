<?php include("head.php"); ?>


<body>
<?php include("entete.php"); ?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center pink-text text-darken-3">L'orge sucrée</h1>
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

      <!--   Icon Section   -->

      


    <?php 
         
            require_once  '../model/ModelEvent.php';

            $events = ModelEvent::getAllEvents();

            foreach($events as $event) {

               print "<div class=\"icon-block\">";
                  print "<div class=\"card\">";                   
                      print "<div class=\"card-content\">";

                        print "<span class=\"card-title  grey-text text-darken-4\">" .$event["nameEvt"] . "</span>";

                         print "<p><strong>" . "Lieu : " . "</strong>" . $event["placeEvt"] . "</p>";
                         print "<p><strong>" . "Date : " . "</strong>" . $event["dateEvt"] . "</p>";
                         print "<p><strong>" . "Prix : " . "</strong>" . $event["priceEvt"] . "€" . "</p>";
                         print "<p><strong>" . "Description : " . "</strong>" . $event["descEvt"] . "</p>";
                         print "<p><strong>" . "Places restantes : " . "</strong>" . $event["nbEvt"] . "</p>";
                      
                        
                        print "<button class=\"btn waves-effect waves-light pink darken-3\" type=\"submit\" name=\"action\">";
                          print "S'inscrire";
                        print "</button>";
                    print "</div>";
                  print "</div>";
                print "</div>";
          }
 
   ?> 

   <!--   
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="../assets/images/equitation-selle.jpg">
              </div>
              
              <div class="card-content">

               <span class="card-title  grey-text text-darken-4">Concours</span>

                   <p><strong>Lieu:</strong> #pibrac</p>
                   <p><strong>Date:</strong> #10/03/2016</p>
                   <p><strong>Prix:</strong> #50 €</p>
                   <p><strong>Description:</strong> #Amateur ou club, ce concours complet sera idéal pour progresser en dressage, obstacle ou cross. </p>
                   <p><strong>Places restantes:</strong> #15</p>
                  
                  <button class="btn waves-effect waves-light pink darken-3 " type="submit" name="action">S'inscrire
                   <i class="material-icons right">envoyer</i>
                  </button>

              </div>
     
             </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">User Experience Focused</h5>
              <p ></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Easy to work with</h5>
              <p></p>
          </div>
        </div>
      </div>
-->
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
