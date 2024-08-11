<?php 

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "is.CnI9]B5rKVIo[";

$conn = mysqli_connect($db_host , $db_user , $db_pass , $db_name  );

if(mysqli_connect_error()){
    echo mtsqli_connect_eror();
    exit;
}

echo "connect successfuly";

$sql = "select *
        from article
        ORDER BY published_at;";

$result = mysqli_query($conn , $sql);

if ($result === false){
    echo mtsqli_eror();
}else{
    $articles = mysqli_fetch_all($result , MYSQLI_ASSOC );
    var_dump($articles);
}