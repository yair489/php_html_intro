<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>

<form method="post">

    <div>
        text: <input type="text" name="usrname" value="insert">
    </div>

    <div>
        password: <input type="password" name="passwors">
    </div>

    <div>
        tel: <input type="tel">
    </div>

    <div>
        textarea:<textarea name="content" ROWS="7" COLS="21" >HELLO  </textarea> 
    </div>

    <div>
        url: <input type="url">
    </div>

    <div>
        date: <input type="date">
    </div>

    <div>
        time: <input type="time">
    </div>

    <div>
        week: <input type="week">
    </div>

    <div>
        color: <input type="color">
    </div>

    <div>
        email: <input type="email">
    </div>

    <div>
        month: <input type="month">
    </div>

    <div>
        range: <input type="range">
    </div>

    <div>
        hidden: <input type="hidden">
    </div>

    <div>
        number: <input type="number">
    </div>

    <div>
        search: <input type="search">
    </div>

    <div>
        datetime-local: <input type="datetime-local">
    </div>
    <button> send</button>
</form>

</body>
</html>

    
