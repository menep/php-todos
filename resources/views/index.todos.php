<h1>All todos</h1>

<ul>
    <?php foreach ($fetchedTodos as $todo) : ?>

    <li><?= $todo['id'] . ', ' . $todo['body'] ?></li>

    <?php endforeach ?>
</ul>