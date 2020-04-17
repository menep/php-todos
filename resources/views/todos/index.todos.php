<h1>All todos</h1>

<?php if ($fetchedTodos) : ?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Todo</th>
            <th>Created at</th>
            <th>Priority</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fetchedTodos as $todo) : ?>
        <tr>
            <td><?= $todo['id'] ?>
            </td>
            <td><?= $todo['body'] ?>
            </td>
            <td><?= $todo['due'] ?>
            </td>
            <td><?= $todo['priority'] ?>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php else : ?>
<p>No todos found</p>

<?php endif;
