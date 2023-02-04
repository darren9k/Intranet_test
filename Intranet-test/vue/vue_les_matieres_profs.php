

<br/>

<table border ="1">
	<tr> 
		<td> Id Matiere </td>
		<td> Nom </td> 
		<td> Nb Heures</td>
	</tr>
	<?php
	$total = 0;
	foreach ($lesMatieres as $uneMatiere) {
		echo " <tr> 
			<td> ".$uneMatiere['idMatiere']."</td>
			<td> ".$uneMatiere['nom']."</td>
			<td> ".$uneMatiere['nbheures']."</td>
		</tr>";
		$total += $uneMatiere['nbheures'];
	}
	echo "</table>";
	echo " <br/> <br/> le total est de : ".$total." heures.";

	?>
</table>
