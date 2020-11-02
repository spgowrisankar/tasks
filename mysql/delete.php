<?php include 'database.php';?>
<?php include 'functions.php'; ?>
<?php
  if (isset($_POST['delete'])) {
    deleteRow();
  }
 ?>
<?php include './includes/header.php';?>
<h2>Deleting User</h2>
<form class="main-form" method="post">
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
    <input type="submit" name="delete" value="Delete">
    </div>
  </fieldset>
</form>
<h4 style="padding:10px">Back To Home-><a href="login_read.php" style="text-decoration: none;color:blue;"> Click Here</a> </h4>

<?php include './includes/footer.php';?>
