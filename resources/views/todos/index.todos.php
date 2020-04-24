<main class="flex-container flex-column flex-align-center margin-top-lg">
    <h1 class="font-md">All todos</h1>

    <section class="margin-top-md">
        <?php if ($fetchedTodos) : ?>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Todo</th>
                    <th>Due at</th>
                    <th>Priority</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fetchedTodos as $todo) : ?>
                <tr>
                    <td><?= $todo['id'] ?>
                    </td>
                    <td>
                        <a
                            href="/todos/<?= $todo['id'] ?>">
                            <?= $todo['body'] ?>
                        </a>
                    </td>
                    <td>
                        <?= (new DateTime($todo['due']))->format('d/m/Y') ?>
                    </td>
                    <td><?= $todo['priority'] ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <?php else : ?>
        <p>No todos found</p>

        <?php endif; ?>
    </section>

</main>