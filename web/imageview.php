<?php
include 'config2.php';
?>
<table cellspacing = 0 cellpadding = 10>
      <tr>
        <td>Image</td>
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "select * from image order by id desc")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td> <img src="../web/images2/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
        <td><a href="update-action2.php?userid=<?php echo $row["id"]; ?>">
                <button type="submit"  style="background-color:red;color:black;">update</button>         
            </a>
            <td>
                      <a href="delete2.php?id=<?php echo $row["id"]; ?>">
                <button type="submit"  style="background-color:red;color:black;">delete</button>
                </a>
            </td>
      </tr>
      <?php endforeach; ?>
    </table>