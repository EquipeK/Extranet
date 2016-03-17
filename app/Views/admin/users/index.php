<form method="get" enctype="multipart/form-data" action="<?= BASE_URL ?>admin/users/add">
	<?= $form->input('firstname', 'Prénom'); ?>
	<?= $form->input('lastname', 'Nom'); ?>
    <?= $form->input('email', 'Email'); ?>
    <?= $form->input('password', 'Mot de passe',['type'=>'password']); ?>
    <?= $form->select('department', 'Départements',$departments); ?>
    <?= $form->submit('Sauvegarder') ?>
</form>
