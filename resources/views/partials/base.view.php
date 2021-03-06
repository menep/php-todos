<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Php todos</title>
  <link rel="stylesheet" href="/styles/base.css" />
  <link rel="stylesheet" href="/styles/header.css" />
  <link rel="stylesheet" href="/styles/layout.css">
  <link rel="stylesheet" href="/styles/typography.css">
</head>

<body>
  <div class="app-wrapper">
    <header class="header">
      <nav>
        <ul class="header--list">
          <li class="header--list-item"><a href="/">Home</a></li>
          <li class="header--list-item"><a href="/todos">Todo list</a></li>
          <li class="header--list-item">
            <a href="/todos/create">Create todo</a>
          </li>
        </ul>
      </nav>
    </header>

    <?php require $contentPath; ?>

  </div>
</body>

</html>