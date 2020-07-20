<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <title>View Records</title>
  </head>
  <body>
    <div class="container">
    <header>
      <h1> COMP1006 - Lab Five</h1>
    </header>
    <main>
        <?php

        require_once('connect.php');

        $sql = 'SELECT * FROM persons';

        $statement = $db->prepare($sql);

        $statement->execute();

        $record = $statement->fetchAll();

        foreach ($record as $records){ ?>
        <tr>
            <td><?php echo $records['first_name']; ?> <a href="delete.php" id=""></a></td>
            <td><?php echo $records['last_name']; ?></td>
            <td><?php echo $records['email']; ?></td>
        </tr>

        <?php
        }
        $statement->closeCursor();
        ?>
    </main>
  </body>
</html>