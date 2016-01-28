        <?php foreach ($pages as $page): ?>

            <h2><?= $page->titre; ?></a></h2>

            <p><?= $page->extrait; ?></p>

        <?php endforeach; ?>