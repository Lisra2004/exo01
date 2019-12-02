<?php
include_once "../functions/category_queries.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listes des catégories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php include_once "./include/navbar.php"; ?>
<div class="jumbotron">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Catégories</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
      for ($ii = 0; $ii < count($categories); $ii++){ ?>
          <tr>
              <th scope="row"><?= $categories[$ii]["id"] ?></th>
              <td><?= $categories[$ii]["category"] ?></td>
              <td><?= $categories[$ii]["description"] ?></td>
              <td><?php //TODO: mettre en place les actions edit et suppr ?></td>
          </tr>
      <?php
      }
      ?>
      </tbody>
    </table>
    <a class="btn btn-primary" href="category.php" role="button">Créer une nouvelle catégorie</a>
</div>

</body>
</html>
