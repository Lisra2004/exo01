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
</head>
<body>
    <h1>Gestion des catégories</h1>
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

</body>
</html>
