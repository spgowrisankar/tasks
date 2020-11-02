<h2>User Details:</h2>
<?php

  if(isset($_GET['action'])) {
    $users = simplexml_load_file('user.xml');
    $id = $_GET['id'];
    $index = 0;
    $i = 0;
    foreach($users->user as $user){
    	if($user['id']==$id){
    		$index = $i;
    		break;
    	}
    	$i++;
    }
    unset($users->user[$index]);
    file_put_contents('user.xml', $users->asXML());
  }
  $users = simplexml_load_file('user.xml');


  ?>
 <a style="text-decoration: none;" href="add.php"><b>Add New User?</b></a>
 <table cellpadding="2" cellspacing="2" border="1">
 	<tr>
 		<th>Id</th>
 		<th>User_Name</th>
 		<th>Email</th>
 		<th>Password</th>
    <th>Phone</th>
 	</tr>
 	<?php foreach($users->user as $user) { ?>
 	<tr>
 		<td><?php echo $user['id']; ?></td>
 		<td><?php echo $user->name; ?></td>
    <td><?php echo $user->email; ?></td>
		<td><?php echo $user->password; ?></td>
		<td><?php echo $user->phone; ?></td>
 		<td><a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a> |
 			<a href="index.php?action=delete&id=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
 	</tr>
 	<?php } ?>
 </table>
