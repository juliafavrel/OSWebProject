<?php 

	require_once  '../model/ModelPerson.php';

	/*try{
		if (isset($_POST['id']) AND 
			isset($_POST['firstName']) AND 
			isset($_POST['lastName'])  AND 
			isset($_POST['mail']) AND 
			isset($_POST['phone']) ) 
		{*/

				$idPerson = $_POST['search'];
				
				$tab=array(
					            'search' => $search,
					        );
		
					ModelPerson::searchPerson($tab);
					header('Location: /../view/search.php');
	
?>


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