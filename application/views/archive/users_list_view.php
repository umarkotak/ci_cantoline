<!DOCTYPE html>
<html>
<head>
  <title>User list</title>
</head>
<body>

  <table border="1">
    <tr>
      <th>id</th>
      <th>username</th>
      <th>name</th>
      <th>phone</th>
      <th>email</th>
      <th>type</th>
      <th>credit</th>  
    </tr>    

    <?php foreach ($result as $object) { ?>
      <tr>
        <td><?php echo $object->id; ?></td>
        <td><?php echo $object->username; ?></td>
        <td><?php echo $object->name; ?></td>
        <td><?php echo $object->phone; ?></td>
        <td><?php echo $object->email; ?></td>
        <td><?php echo $object->type; ?></td>
        <td><?php echo $object->credit; ?></td>
      </tr>
    <?php } ?>
  </table>

</body>
</html>