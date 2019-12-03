<?php
include_once "../config/connexion.php";

if (!function_exists(connectDB())){
    $db = connectDB();

}


//Create
if ($_POST["create"] == "ok"){
    $category = $_POST["category"];
    $description = $_POST["description"];

    if (!empty($category)){
        $stmt = mysqli_prepare($db, "INSERT INTO category(category, description) VALUES(?,?)");
        mysqli_stmt_bind_param($stmt, 'ss', $category, $description);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return header("Location: ../index.php?mess=1");
    } elseif (empty($category)){
        return header("Location: ../templates/category.php?error=1");
    }
}

//Read
$query = mysqli_query($db, "SELECT * FROM category");
$categories = mysqli_fetch_all($query, MYSQLI_ASSOC);

//Update
if ($_GET["edit"]){
    $id = $_GET["edit"];
    $stmt = mysqli_query($db, "SELECT * FROM category WHERE id VALUE (?)");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $categories = mysqli_stmt_fetch($stmt);
    return header("Location: ../templates/category.php?mess=2");
}

//Delete
if ($_GET["del"]){
    $id = $_GET["del"];
    $stmt = mysqli_prepare($db, "DELETE FROM category WHERE id=?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    return header("Location: ../index.php?mess=3");
}