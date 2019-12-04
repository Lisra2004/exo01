<?php
include_once "../functions/sheet_queries.php";
include_once "../functions/category_queries.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des fiches</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php include_once "./include/navbar.php"; ?>
<div class="jumbotron">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Libellé</th>
          <th scope="col">Description</th>
          <th scope="col">Catégorie</th>
          <th scope="col">Action1</th>
          <th scope="col">Action2</th>

        </tr>
      </thead>
      <tbody>
      <?php
      for ($ii = 0; $ii < count($sheets); $ii++){
          ?>
          <tr>
              <th scope="row"><?= $sheets[$ii]["id"] ?></th>
              <td><?= $sheets[$ii]["sheet"] ?></td>
              <td><?= $sheets[$ii]["description"] ?></td>
              <td><?= $categories[$sheets[$ii]["category_id"]]["category"] ?></td>
              <td>
                  <form action="../functions/sheet_queries.php" method="get">
                      <button name="edit" value="<?= $sheets[$ii]["id"] ?>">Modifier</button>
                  </form>
              </td>
              <td>
                  <form action="../functions/sheet_queries.php" method="get">
                      <button name="delete" value="<?= $sheets[$ii]["id"] ?>">Supprimer</button>
                  </form>
              </td>

          </tr>

          </tr>
      <?php
      }
      ?>
      </tbody>
    </table>
    <a class="btn btn-primary" href="sheet.php" role="button">Créer une nouvelle fiche</a>
</div>

</body>
</html>
