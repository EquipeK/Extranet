<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>
<form method="get" action="<?= BASE_URL ?>admin/departments/add">
    <?= $form->input('label_department', 'Libellé'); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>
