<?php include 'database.php';?>
<?php include 'functions.php'; ?>
<?php
  if (isset($_POST['update'])) {
    updateTable();
  }

 ?>
<?php include './includes/header.php';?>
<h2>Updating Table</h2>
<form class="main-form" method="post" action="login_update.php">
  <fieldset class="fieldset">
    <div class="form-control">
      <label for="id">Select the Id:</label>
      <select name="id">
      <?php
      showAllData();
      ?>
      </select>
    </div>
    <div class="form-control">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" >
    </div>
    <div class="form-control">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
    </div>
    <div class="form-control">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
    </div>
    <div class="form-control">
      <label for="phone">Phone:</label>
      <input type="tel" name="phone" id="phone">
    </div>
    <div class="form-control">
    <input type="submit" name="update" value="Update">
    </div>
  </fieldset>
  <h4 style="padding:10px">Back To Home-><a href="login_read.php" style="text-decoration: none;color:blue;"> Click Here</a> </h4>
</form>

<?php include './includes/footer.php';?>
