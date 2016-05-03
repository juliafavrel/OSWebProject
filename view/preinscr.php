<?php include("head.php"); ?>

<?php include("entete.php"); ?>

<?php include("rechercher.php"); ?>


  <div class="container">
    <div class="section">

       <table class="bordered">
        <thead>
          <tr>
              <th data-field="id">N°</th>
              <th data-field="nomcli">Nom</th>
              <th data-field="prenomcli">Prénom</th>
              <th data-field="nomevnt">Evenement</th>
              <th data-field="lieuevt">Lieu</th>
              <th data-field="dateevt">Date</th>
              <th data-field="resad">Date Reservation</th>
              <th data-field="resah">Heure réservation</th>
              <th data-field="accep"></th>
              <th data-field="suppr"></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>#1</td>
            <td>#Favrel</td>
            <td>#Julia</td>
            <td>#Concours</td>
            <td>#Pibrac</td>
            <td>#21/05/2016</td>
            <td>#14/04/2016</td>
            <td>#15:45</td>
            <td>   <a class="btn-floating btn-small waves-effect waves-light pink darken-3"><i class="material-icons">done</i></a>

            </td>
            <td> <a class="btn-floating btn-small waves-effect waves-light pink darken-3"><i class="material-icons">delete</i></a>
            </td>
          </tr>


          
        </tbody>
      </table>
      
    <p class="center">
      <button class="btn waves-effect waves-light pink darken-3 thin" type="submit" name="action">
          Ajouter
      </button>
    </p>

    </div>
  </div>


 <?php include("image-deroulante.php"); ?>

 <?php include("footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>