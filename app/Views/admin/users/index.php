<form method="post" enctype="multipart/form-data">
	<?= $form->input('firstname', 'Prénom'); ?>
	<?= $form->input('lastname', 'Nom'); ?>
    <?= $form->input('email', 'Email'); ?>
    <?= $form->input('password', 'Mot de passe'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>

