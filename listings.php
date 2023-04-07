<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listings</title>
  </head>
  <body>
    <table border = 1 cellspacing = 0 cellpadding = 10>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>price</td>
        <td>size&location</td>
        <td>duration</td>
        <td>description</td>
        <td>Image</td>
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM listings ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["price"]; ?></td>
        <td><?php echo $row["size&location"]; ?></td>
        <td><?php echo $row["duration"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
        <td> <img src="img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="index3.php">Upload Listing</a>
  </body>
</html>
