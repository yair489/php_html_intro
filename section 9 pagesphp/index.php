<?php
include 'includes/database.php';

$sql = "select *
        from article
        ORDER BY published_at;";//id = o for check the  if(empty($articles)) 

$result = mysqli_query($conn , $sql);

if ($result === false){
    echo mtsqli_eror();
}else{
    $articles = mysqli_fetch_all($result , MYSQLI_ASSOC );
}

?>

<?php require 'includes/header.php'; ?>

        <?php if(empty($articles)): ?>
            <p> NO article found </p>
        <?php else: ?> 


        <ul>
            <?php foreach ($articles as $article): ?>

                <li>
                    <article>
                        <h2><a href="article.php?id=<?= $article['id']; ?>"><?= $article['title']; ?></a></h2>
                        <p><?= $article['content']; ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php endif; ?>
        
<?php require 'includes/footer.php'; ?>
