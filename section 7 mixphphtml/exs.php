<?php

$fruit = ['apple', 'banana', 'orange', 'mango'];
$i = 0;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
    </head>
    <body>

    <h1>Fruit</h1>

    <!-- put your code below this line -->
    <ol> 
        <?php foreach( $fruit as $f){   ?>
            <li> <?php echo $f; ?></li>
        <?php  } ?> 
        
    </ol>


    </body>
</html>