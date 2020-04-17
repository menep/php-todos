<h1>All todos</h1>

<?php if ($fetchedTodos) : ?>
<ul>
    <?php foreach ($fetchedTodos as $todo) : ?>
    <li>
        <?= $todo['id'] . ', ' . $todo['body'] ?>
    </li>

    <?php endforeach ?>
</ul>

<?php else : ?>
<p>No todos found</p>

<?php endif;
