<?php include 'database.php'; ?>

<?php
$query = "SELECT * FROM user_details";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die('Query Failed'. mysqli_error());
    }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD-FORM</title>
  </head>
  <body>
    <h2 style="color:red">User Details</h2>
    <h4 style="padding:5px">Create New User?<a href="create.php" style="text-decoration: none;color:blue;"> Click Here</a> </h4>
    <table cellpadding = '5' border="2">
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>ACTION</th>
      </tr>
      <?php
      if($result-> num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> |<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
        </tr>
      <?php }
      }
       ?>

    </table>
  </body>
</html>
