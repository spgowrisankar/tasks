<h2>Edit Deatils Here:</h2>
<link rel="stylesheet" href="main.css">

<?php
require 'edit_validate.php';
$users = simplexml_load_file('user.xml');

if(isset($_POST['submitSave'])) {

	foreach($users->user as $user) {
		if($user['id']==$_POST['id']) {
      $user->name = $_POST['name'];
      $user->email = $_POST['email'];
      $user->password = $_POST['password'];
      $user->phone = $_POST['phone'];
			break;
		}
	}
	file_put_contents('user.xml', $users->asXML());
	header('location: index.php');
}

foreach($users->user as $user) {
	if($user['id']==$_GET['id']) {
		$id = $user['id'];
		$name = $user->name;
		$email = $user->email;
    $password = $user->password;
    $phone = $user->phone;
		break;
	}
}
?>
<form class="main-form" method="post">
  <fieldset class="fieldset">
    <div class="form-control">
      <label for="id">User Id:</label>
      <input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly">
    </div>
    <div class="form-control">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value="<?php echo $name; ?>">
      <span class="error"><?php echo $nameError;?></span>
    </div>
    <div class="form-control">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="<?php echo $email; ?>">
      <span class="error"> <?php echo $emailError;?></span>
    </div>
    <div class="form-control">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="<?php echo $password; ?>">
      <span class="error"> <?php echo $passwordError;?></span>
    </div>
    <div class="form-control">
      <label for="phone">Phone:</label>
      <input type="tel" name="phone" id="phone" value="<?php echo $phone; ?>">
      <span class="error"> <?php echo $phoneError;?></span>
    </div>
    <div class="form-control">
    <input type="submit" name="submit" value="Submit">
    </div>
  </fieldset>
</form>
