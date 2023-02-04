<h3> Gestion des étudiants </h3>
<br/>
<?php

	$laHisto =null; 
	$unControleur->setTable ("archiveEtudiant");
	

	$lesHistos = $unControleur->selectAll(); 

	$unControleur->setTable ("etudiant");
	require_once ("vue/vue_select_all_histo.php");

?>
