<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>
<form method="post">
    <?= $form->input('email', 'Libellé',null/*['onblur' => 'verifNom(this)']*/); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>