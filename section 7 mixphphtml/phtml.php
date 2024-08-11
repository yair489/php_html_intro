<?php

$hour = 12;
//comment 
/*
comment 
more than 1 line
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
    <meta charset="utf-8">
</head>
<body><!-- fefefefe--> 
    <h1>Lorem Ipsum</h1>

    <?php if ($hour < 12): ?>
        Good morning
    <?php elseif ($hour < 18): ?>
        Good afternoon  
    <?php elseif ($hour < 22): ?>
        Good evening
    <?php else: ?>
        Good night
    <?php endif; ?>

</body>
</html>
 