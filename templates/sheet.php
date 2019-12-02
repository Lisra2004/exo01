<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiches</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php include_once "./include/navbar.php"; ?>
<div class="jumbotron">
    <h1>Gestion des fiches</h1>
<?php
    if (isset($_GET['error'])){
        if ($_GET['error'] == 2){ ?>
            <div class="alert alert-warning" role="alert">
              Vous n'avez pas de libellé
            </div>
    <?php
        }
    }

    ?>

    <form method="post" action="../functions/sheet_queries.php">
      <div class="form-group">
        <label for="sheet">Libellé</label>
        <input type="text" class="form-control" name="sheet" id="sheet" placeholder="libellé">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
      </div>
        <input type="submit" name="create" value="ok">

    </form>
</div>
</body>
</html>
