<h3> Gestion des classes  </h3>
<?php
	$laClasse =null; 
	$lesEtudiants = null;
	$unControleur->setTable ("classe");

	if(isset($_SESSION['email']) and $_SESSION['role']=="admin" )
	{
		if (isset($_GET['idClasse']) && isset($_GET['action']))
		{
			$action = $_GET['action']; 
			$idClasse = $_GET['idClasse'];
			$where = array("idClasse"=>$idClasse);
			switch ($action) {
				case 'sup':
				 	$unControleur->delete($where);
					break;
				
				case 'edit':
					 $laClasse = $unControleur->selectWhere("*", $where);

					break;

				case 'voir':
				$unControleur->setTable("etudiant"); 
					$lesEtudiants = $unControleur->selectWhereAll(
						"*",$where);
			}
		}
		$unControleur->setTable ("classe");


		require_once ("vue/vue_insert_classe.php");

		if(isset($_POST['Modifier']))
		{
			$where = array("idClasse"=>$_GET['idClasse']);
			$tab=array("designation"=>$_POST["designation"], "salle"=>$_POST["salle"], 
				"diplome"=>$_POST["diplome"],"nbetudiant"=>$_POST["nbetudiant"]);
			$unControleur->update ($tab, $where); 
			header("Location: index.php?page=1"); 
		}
		if (isset($_POST['Valider']))
		{
			$tab=array("designation"=>$_POST["designation"], "salle"=>$_POST["salle"], 
				"diplome"=>$_POST["diplome"],"nbetudiant"=>$_POST["nbetudiant"]);
			$unControleur->insert ($tab); 
		}

	}

	echo"<br/><h2> Liste des classes </h2><br/>"; 
	if(isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot']; 
		$tab=array("designation", "salle", "diplome","nbetudiant");
		$lesClasses = $unControleur->selectSearch($tab, $mot);
	}else {
		$chaine = "idClasse, designation, salle, diplome,nbetudiant" ; 
		$lesClasses = $unControleur->selectAll($chaine); 
	}




	
	require_once ("vue/vue_select_all_classes.php"); 

	echo "<br> <br>";

	if($lesEtudiants != null)
	{
		require_once("vue/vue_les_etudiants_classe.php");
	}else{
		echo "cette classe n'a pas d'étudiants.";
	}
?>
