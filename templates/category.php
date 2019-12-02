<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catégories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php include_once "./include/navbar.php"; ?>

<div class="jumbotron">
    <h1>Gestion des catégories</h1>

    <?php
    if (isset($_GET['error'])){
        if ($_GET['error'] == 1){ ?>
            <div class="alert alert-warning" role="alert">
              Vous n'avez pas de nom à votre catégorie
            </div>
    <?php
        }
    }

    ?>

    <form method="post" action="../functions/category_queries.php">
        <div class="form-group">
            <label for="category">Catégorie</label>
            <input type="text" class="form-control" name="category" id="category" placeholder="catégorie">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="description">
        </div>
        <input type="submit" name="create" value="ok">
    </form>
</div>
</body>
</html>
