<br/>

<table border ="1">
	<tr> 
		<td> Id Etudiant </td>
		<td> Nom </td> 
		<td> Prénom </td> 
		<td> Email</td>
		<td> Téléphone</td>

	</tr>
	<?php
	foreach ($lesEtudiants as $unEtudiant) {
		echo " <tr> 
			<td> ".$unEtudiant['idEtudiant']."</td>
			<td> ".$unEtudiant['nom']."</td>
			<td> ".$unEtudiant['prenom']."</td>
			<td> ".$unEtudiant['email']."</td>
			<td> ".$unEtudiant['tel']."</td>
		</tr>";
	}
	?>
</table>



