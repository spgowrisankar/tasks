
<h2>Add Deatils Here:</h2>
<link rel="stylesheet" href="main.css">
<?php require 'validate.php' ?>

<!-- form -->
  <form class="main-form" method="post" >
    <fieldset class="fieldset">
      <div class="form-control">
        <label for="id">User Id:</label>
        <input type="text" name="id" value="<?php if(isset($_POST['id'])) { echo htmlentities ($_POST['id']); }?>">
        <span class="error"><?php echo $idError;?></span>
      </div>
      <div class="form-control">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) { echo htmlentities ($_POST['name']); }?>">
        <span class="error"><?php echo $nameError;?></span>
      </div>
      <div class="form-control">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) { echo htmlentities ($_POST['email']); }?>">
        <span class="error"><?php echo $emailError;?></span>
      </div>
      <div class="form-control">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="<?php if(isset($_POST['password'])) { echo htmlentities ($_POST['password']); }?>">
        <span class="error"><?php echo $passwordError;?></span>
      </div>
      <div class="form-control">
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" value="<?php if(isset($_POST['phone'])) { echo htmlentities ($_POST['phone']); }?>">
        <span class="error"><?php echo $phoneError;?></span>
      </div>
      <div class="form-control">
      <input type="submit" name="add" value="Submit">
      </div>
    </fieldset>
  </form>
