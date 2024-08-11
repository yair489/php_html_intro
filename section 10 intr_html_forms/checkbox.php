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
         <input type="checkbox" name="terms" >
    </div>

    
    <div>
         <input type="checkbox" name="terms1" value="yes" >
    </div>

    <div>
         <input type="checkbox" name="terms2" value="yes" checked >I agree to thr terms
    </div>

    <br><br><br><br>


    <fieldset>
        <legend> article </legend>
        <div>
            <label for="title">title</label>
            <input type="text" name="title" id="title" placeholder="article title" readonly>
        </div>
        <div>
            <label for="content">content</label>
            <textarea name="content" rows="4" cols="40" id="content" placeholder="content"></textarea>
        </div>
    </fieldset>
    


    <fieldset>
        <legend> question </legend>
    <p>which color do you like? </p>

    <div>
         <input type="checkbox" name="colours[]" value="red" >red
    </div>
    <div>
         <input type="checkbox" name="colours[]" value="blue" id="blue"><label for="blue">blueblue</label> 
    <div>
         <input type="checkbox" name="colours[]" value="green" id="green"><label for="green">green</label> 
    </div>

    <br><br><br>

    <div>
        <p>which color do you like? </p>
        <input type="radio" name="colur" value="blue"  checked>blue<br>
        <input type="radio" name="colur" value="green">green<br>
        <input type="radio" name="colur" value="red">red
    </div>
</fieldset>


    <button> send</button>
</form>

</body>
</html>

    
