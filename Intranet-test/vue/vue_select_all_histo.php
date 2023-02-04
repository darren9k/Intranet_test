
<br/>

<table border ="1">
	<tr> 
		<td> Id Etudiant </td>
		<td> Nom </td> 
		<td> Prénom </td> 
		<td> Email</td>
		<td> telephone</td>
		<td> Classe</td>
		<td> Diplome</td>
	</tr>
	<?php
	foreach ($lesHistos as $uneHisto) {
		echo " <tr> 
			<td> ".$uneHisto['idEtudiant']."</td>
			<td> ".$uneHisto['nom']."</td>
			<td> ".$uneHisto['prenom']."</td>
			<td> ".$uneHisto['email']."</td>
			<td> ".$uneHisto['tel']."</td>
			<td> ".$uneHisto['nomClasse']."</td>
			<td> ".$uneHisto['diplome']."</td>

		</tr>";
	}
	?>
</table>



