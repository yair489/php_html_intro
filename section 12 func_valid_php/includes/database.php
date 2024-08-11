<?php


/**
 * Get the database connection 
 * 
 * @return object Conecction to a Mysql server
 */
function getDB(){
    $db_host = "localhost";
    $db_name = "cms";
    $db_user = "cms_www";
    $db_pass = "is.CnI9]B5rKVIo[";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}
