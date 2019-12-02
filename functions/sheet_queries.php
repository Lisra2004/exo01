<?php
include "../config/connexion.php";

$db = connectDB();

//Create
if ($_POST["create"] == "ok"){
    $sheet = $_POST["sheet"];
    $description = $_POST["description"];

    if (!empty($sheet)){
        $stmt = mysqli_prepare($db, "INSERT INTO sheet(sheet, description) VALUES(?,?)");
        mysqli_stmt_bind_param($stmt, 'ss', $sheet, $description);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return header("Location: ../index.php?mess=1");
    } elseif (empty($sheet)){
        return header("Location: ../templates/sheet.php?error=1");
    }
}

//Read
$query = mysqli_query($db, "SELECT * FROM sheet");
$categories = mysqli_fetch_all($query, MYSQLI_ASSOC);

//Update
if ($_GET["edit"]){
    $id = $_GET["edit"];
    $stmt = mysqli_query($db, "SELECT * FROM sheet WHERE id VALUE (?)");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $categories = mysqli_stmt_fetch($stmt);
    return header("Location: ../templates/sheet.php?mess=2");
}

//Delete
if ($_GET["del"]){
    $id = $_GET["del"];
    $stmt = mysqli_prepare($db, "DELETE FROM sheet WHERE id=?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    return header("Location: ../index.php?mess=3");
}