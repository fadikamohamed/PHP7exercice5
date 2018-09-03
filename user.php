<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>User</title>
  </head>
  <body>
    <p>
      <?php
        if (!empty($_POST['civility']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname'])) {
          echo $_POST['civility'
              . ''] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
        }
       ?>
    </p>
  </body>
</html>
