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
        where id = 0
        ORDER BY published_at;";//id = o for check the  if(empty($articles)) 

$result = mysqli_query($conn , $sql);

if ($result === false){
    echo mtsqli_eror();
}else{
    $articles = mysqli_fetch_all($result , MYSQLI_ASSOC );
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>
<body>

    <header>
        <h1>My blog</h1>
    </header>

    <main>
        <?php if(empty($articles)): ?>
            <p> NO article found </p>
        <?php else: ?> 


        <ul>
            <?php foreach ($articles as $article): ?>

                <li>
                    <article>
                        <h2><?= $article['title']; ?></h2>
                        <p><?= $article['content']; ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php endif; ?>
    </main>
</body>
</html>
