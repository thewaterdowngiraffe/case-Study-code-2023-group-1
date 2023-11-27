
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        function button1() { 
            header('Location: mainScreen.php');
        }
    ?>
<!-- doesnt do anything lol--->
    <form method="post">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="John"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Doe"><br><br>
    <input type="submit" name="button1" value="Login">
    </form> 
</body>
</html>


