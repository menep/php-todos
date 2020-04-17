<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Php todos</title>
</head>

<body>
    <pre>
        <?php foreach ($todo as $key => $value) : ?>
            <p><?= $key ?>: <?= $value ?></p>
        <?php endforeach; ?>
    </pre>
</body>

</html>