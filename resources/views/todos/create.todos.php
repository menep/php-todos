<main class="flex-container flex-column flex-align-center margin-top-lg">
  <h1 class="font-md">Create todo</h1>
  <section class="margin-top-md">
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
    <?php endif;?>
  </section>

</main>