<?php

function connectDB()
{
    if ($_SERVER['SERVER_NAME'] == 'localhost') {
        // info serveur local
        $_Host = 'localhost';
        $_Login = 'dawan';
        $_Pwd = 'dawan';
        $_DBName = "exo1";
    } else {
        // info serveur en ligne
        $_Host = 'domaine';
        $_Login = 'OOUHBHFGDFJ';
        $_Pwd = '1234';
        $_DBName = "exo1";
    }

    // connexion a la base de données local ou en ligne
    $connect = mysqli_connect($_Host, $_Login, $_Pwd, $_DBName);

    return $connect;
}