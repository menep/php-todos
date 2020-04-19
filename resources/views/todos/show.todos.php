<?php require __DIR__ . '/../partials/head.html'; ?>

<pre>
    <?php foreach ($todo as $key => $value) : ?>
        <p><?= $key ?>: <?= $value ?></p>
    <?php endforeach; ?>
</pre>

<?php require __DIR__ . '/partials/footer.html';
