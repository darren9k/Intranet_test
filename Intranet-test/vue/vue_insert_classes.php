<h3 class="text-center mb-3"><?= ($laClasse != null ? "Modification" : "Insertion"); ?> d'une classe</h3>
<form method="post" action="">
	<div class="mb-3">
		<label for="designation" class="form-label">Nom de la classe</label>
		<input type="text" name="designation" id="designation" placeholder="Ex : SLAM 2A" class="form-control" value="<?= ($laClasse != null ? $laClasse['designation'] : null); ?>">
	</div>
	<div class="mb-3">
		<label for="salle" class="form-label">Salle de cours</label>
		<input type="text" name="salle" id="salle" placeholder="Ex : Salle 2.8" class="form-control" value="<?= ($laClasse != null ? $laClasse['salle'] : null); ?>">
	</div>
	<div class="mb-5">
		<label for="diplome" class="form-label">Diplôme préparé</label>
		<input type="text" name="diplome" id="diplome" placeholder="Ex : BTS SIO" class="form-control" value="<?= ($laClasse != null ? $laClasse['diplome'] : null); ?>">
	</div>
	<div class="d-flex justify-content-center mb-5">
		<button type="reset" class="btn btn-danger me-2">Annuler</button>
		<button type="submit" <?= ($laClasse != null ? 'name="subeditclass"' : 'name="subaddclass"'); ?> class="btn btn-primary"><?= ($laClasse != null ? "Modifier" : "Ajouter"); ?></button>
	</div>
</form>
