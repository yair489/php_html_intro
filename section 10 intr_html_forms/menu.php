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

    <select name="marque">
        <option value="bmw">BMW</option>
        <option value="fmc">Ford</option>
        <option value="saad">Saad</option>

    </select>
    <br><br><br><br>
    <select name="marque[]" multiple>
        <option value="bmw">BMW</option>
        <option value="fmc">Ford</option>
        <option value="saad">Saad</option>

    </select>
    <br><br><br><br>

    <select name="country" >
        <optgroup label="Europe">
            <option value="germany">germany</option>
            <option value="france">france</option>
            <option value="uk">united kingdom</option>
        </optgroup>
        <optgroup label="America">
            <option value="brazil">brazil</option>
            <option value="canada">canada</option>
            <option value="usa">usa</option>
        </optgroup>


    </select>

    <button> send</button>
</form>

</body>
</html>

    
