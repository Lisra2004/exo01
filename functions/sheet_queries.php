<?php
include_once "../config/connexion.php";

if (!function_exists(connectDB())){
    $db = connectDB();

}

//Create
if ($_POST["create"] == "ok"){
    $sheet = $_POST["sheet"];
    $description = $_POST["description"];
    if (isset($_POST["category"])){
        $category = $_POST["category"];
    }

    if (!empty($sheet)){
        if (!isset($category)){
            $stmt = mysqli_prepare($db, "INSERT INTO sheet(sheet, description) VALUES(?,?)");
            mysqli_stmt_bind_param($stmt, 'ss', $sheet, $description);
        }else{
            $stmt = mysqli_prepare($db, "INSERT INTO sheet(sheet, description, category_id) VALUES(?,?,?)");
            mysqli_stmt_bind_param($stmt, 'ssi', $sheet, $description, $category);
        }
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return header("Location: ../index.php?mess=4");
    } elseif (empty($sheet)){
        return header("Location: ../templates/sheet.php?error=2");
    }
}

//Read
$query = mysqli_query($db, "SELECT * FROM sheet");
$sheets = mysqli_fetch_all($query, MYSQLI_ASSOC);

//Update
if ($_GET["edit"]){
    $id = $_GET["edit"];
    $stmt = mysqli_query($db, "SELECT * FROM sheet WHERE id VALUE (?)");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $categories = mysqli_stmt_fetch($stmt);
    return header("Location: ../templates/sheet.php?mess=5");
}

//Delete
if ($_GET["del"]){
    $id = $_GET["del"];
    $stmt = mysqli_prepare($db, "DELETE FROM sheet WHERE id=?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    return header("Location: ../index.php?mess=6");
}