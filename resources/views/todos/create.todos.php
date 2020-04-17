<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Php todos</title>
</head>

<body>
  <h1>Create todo</h1>
  <form action="/todos/create" method="POST">
    <label>Body: <input type="text" name="body" /></label>
    <br>
    <label>Due:
      <input type="date" name="due">
    </label>
    <br />
    <label>Priority:
      <select name="priority">
        <option value="1">High</option>
        <option value="2">Normal</option>
        <option value="3">Low</option>
      </select>
    </label>
    <br />
    <input type="submit" value="Create todo" />
  </form>

  <?php if (isset($_SESSION)) : ?>
  <?php if ($_SESSION['success']) : ?>
  <p style="color: green;">Your new Todo was successfully created!</p>
  <?php elseif ($_SESSION['error']) : ?>
  <p style="color: red;">There was an issue creating your todo</p>
  <?php endif; ?>
  <?php endif ?>
</body>

</html>