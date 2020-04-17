<?php require __DIR__ . '/../partials/head.html'; ?>

<body>
    <pre>
        <?php foreach ($todo as $key => $value) : ?>
            <p><?= $key ?>: <?= $value ?></p>
        <?php endforeach; ?>
    </pre>
</body>

</html>