<?php
  if(isset($_POST['submit']))
  {
    $xml = new DomDocument("1.0", "UTF-8");
    $xml->load('data.xml');

    $user_id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $rootTag = $xml->getElementsByTagName("data")->item(0);

    $infoTag = $xml->createElement("info");
      $user_id_Tag = $xml->createElement("id", $user_id);
      $nameTag = $xml->createElement("name", $name);
      $emailTag = $xml->createElement("email", $email);
      $passwordTag = $xml->createElement("password", $password);

      $infoTag->appendChild($user_id_Tag);
      $infoTag->appendChild($nameTag);
      $infoTag->appendChild($emailTag);
      $infoTag->appendChild($passwordTag);

    $rootTag->appendChild($infoTag);
    $xml->save('data.xml');

  }

    $xml = simplexml_load_file('data.xml') or die('Failed to create an object');
  ?>
<b><a href="index.php" >Add New User</a></b>

  <table cellpadding="2" cellspacing="2" border="1">
    <tr>
      <th>User Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
    <?php foreach ($xml as $item => $value) { ?>
      <tr>
        <td><?php echo $value->id ?></td>
        <td><?php echo $value->name; ?></td>
        <td><?php echo $value->email; ?></td>
        <td><?php echo $value->password; ?></td>
        <td align="center">
          <a href="<?php $value['id']; ?>" onclick="return confirm('Are You Want to Delete')">Delete</a></td>
      </tr>
    <?php } ?>
  </table>
