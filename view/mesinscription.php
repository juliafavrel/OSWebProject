<?php include("head.php"); ?>
<body>
<?php include("entete.php"); ?>

  <div class="container">
    <div class="section" class="bordered">

       <table>
        <thead>
          <tr>
              <th data-field="id">Evenement</th>
              <th data-field="lieu">Lieu</th>
              <th data-field="date">Date</th>
              <th data-field="prix">Prix</th>
              <th data-field="placerest">Places restantes</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>#nom</td>
            <td>#lieu</td>
            <td>#date</td>
            <td>#prix</td>
            <td>#placerest</td>
          </tr>
          
        </tbody>
      </table>
      

    </div>
  </div>


 <?php include("image-deroulante.php"); ?>

 <?php include("footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>