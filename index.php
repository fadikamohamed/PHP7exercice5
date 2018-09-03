<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <form action="user.php" method="post">
      <label for="civility">Civilité</label>
      <select name="civility">
          <option selected disabled>Sélectionnez</option>
        <option value="M">M</option>
        <option value="Mme">Mme</option>
      </select>
      <label for="lastname">Nom</label><input type="text" name="lastname">
      <label for="firstname">Prénom</label><input type="text" name="firstname">
      <input type="submit" name="button" value="Valider">
    </form>
  </body>
</html>
