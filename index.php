<?php
// appel de connexion
include_once 'config/connexion.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice n°1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php
if (isset($_GET['mess'])){
    if ($_GET['mess'] == 1){ ?>
        <div class="alert alert-success" role="alert">
          Votre catégorie a bien été enregistré
        </div>
<?php
    }elseif ($_GET['mess'] == 2){ ?>
        <div class="alert alert-success" role="alert">
          Votre catégorie a bien été modifié
        </div>
<?php
    }elseif ($_GET['mess'] == 3){ ?>
        <div class="alert alert-info" role="alert">
          Votre catégorie a bien été supprimé
        </div>
<?php
    }
}
// TODO: mettre en place tous les messages
?>

<?php include_once "./templates/include/navbar.php"; ?>
<div class="jumbotron">

    <h1>Annuaire par catégorie</h1>
<!--    TODO: mise en place de boucle categorie avec recherche de celle-ci dans les fiches-->
    <div class="container">
        <h2>Catégorie</h2>
        <div class="container">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Fiche</h5>
                <p class="card-text">Description</p>
              </div>
            </div>
        </div>
    </div>
</div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
